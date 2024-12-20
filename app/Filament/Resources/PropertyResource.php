<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Models\Area;
use App\Models\City;
use App\Models\Developer;
use App\Models\Property;
use App\Models\Amenity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Support\Enums\FontWeight;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Stack;

class PropertyResource extends Resource {
    protected static ?string $model = Property::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form {
        return $form
            ->columns([
                'sm' => 3,
                'xl' => 4,
            ])
            ->schema([
                TextInput::make('name')->label('Property name')->required()->placeholder('Property Name')
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))->columnSpan(2),
                TextInput::make('slug')->required()->placeholder('Slug'),
                Select::make('buy_sell')->options([ 'Sell' => 'Sell', 'Buy' => 'Rent'])->label('Buy or Sell')->default(1)->columnSpan('Sell'),
                
                TextInput::make('address')->label('Address')->placeholder('Address')->columnSpan(2),

                Select::make('city_id')->label('Select City')->placeholder('Select City')
                    ->options(City::all()->pluck('name', 'id'))
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('area_id', null);
                    })
                    ->default(function (Forms\Get $get) {
                        $subcategory = Area::find($get('city_id'));
                        return $subcategory ? $subcategory->parent_id : null;
                    })
                    ->live(),

                Select::make('area_id')->label('Select Area')
                    ->placeholder(fn(Forms\Get $get): string => empty($get('city_id')) ? 'Select Area' : 'Select Area')
                    ->options(function (Forms\Get $get) {
                        $categoryId = $get('city_id');
                        if (empty($categoryId)) {
                            return [];
                        }
                        return Area::where('city_id', $categoryId)->pluck('name', 'id');
                    })
                    ->reactive(),
                
                Select::make('developer_id')->label('Developer')->options(Developer::all()->pluck('name','id')),                
                TextInput::make('contact_seller')->label('Contact Seller')->placeholder('Contact Seller'),                
                
                TextInput::make('price')->label('Price')->required()->placeholder('Price'),
                TextInput::make('average_price')->label('Average Price')->placeholder('Average Price'),
                
                FileUpload::make('cover_photo')->directory('propertyPhotos')
                            ->openable()     
                            ->imageCropAspectRatio('4:3')
                            ->imageEditorEmptyFillColor('#000000'),
                            
                FileUpload::make('property_images')
                            ->directory('propertyPhotos')
                            ->multiple()
                            ->openable()                            
                            ->imageCropAspectRatio('4:3')
                            ->imageEditorEmptyFillColor('#000000'),
                                         
                Textarea::make('google_location')->label('Google Location')->placeholder('Google Location')->columnSpan(1),
                DatePicker::make('launch_date')->format('d/m/Y'),
                DatePicker::make('possession_date')->format('d/m/Y'),
                
                Select::make('possession_status')->options([ 'ready_to_move' => 'Ready to Move', 'under_construction' => 'Under Construction'])->default('under_construction'),
                
                TextInput::make('size')->label('Size')->placeholder('Size'),
                Select::make('bhk_type')->options([ '2 BHK' => '2 BHK', '3 BHK' => '3 BHK', '4 BHK' => '4 BHK', '5 BHK' => '5 BHK'])->default('2 BHK'),
                TextInput::make('project_area')->label('Project Area')->placeholder('Project Area'),
                TextInput::make('project_size')->label('Project Size')->placeholder('Project Size'),
                TextInput::make('rera')->label('RERA')->placeholder('RERA'),
                Select::make('status')->options([ 1 => 'Active', 0 => 'Block'])->default(1),

                RichEditor::make('content')->label('Content')->placeholder('Content')->columnSpan(2),
                Select::make('amenities')->label('Amenity')->options(Amenity::all()->pluck('name','id'))->multiple()->searchable()->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        
            ->query(Property::select('properties.*','cities.name as city_name', 'areas.name as area_name', 'developers.name as developer_name')
                ->leftJoin('cities','cities.id','=','properties.city_id')
                ->leftJoin('areas','areas.id','=','properties.area_id')
                ->leftJoin('developers','developers.id','=','properties.developer_id')
            )
            ->columns([
                //ImageColumn::make('image')->defaultImageUrl(url('/storage/dummy.jpg'))->circular(),
                TextColumn::make('name')->sortable()->weight(FontWeight::Bold)->label('Property Name'),
                TextColumn::make('developer_name')->label('Developer'),
                TextColumn::make('area_name')->label('Area'),
                TextColumn::make('city_name')->label('City'),                
                IconColumn::make('status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-x-mark')
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
