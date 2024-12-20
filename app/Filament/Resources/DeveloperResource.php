<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeveloperResource\Pages;
use App\Filament\Resources\DeveloperResource\RelationManagers;
use App\Models\Developer;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class DeveloperResource extends Resource
{
    protected static ?string $model = Developer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->placeholder('Developer Name'),                
                FileUpload::make('logo'),
                TextInput::make('address')->placeholder('Address'),                
                TextInput::make('phone')->placeholder('phone'),                
                TextInput::make('contact_person')->placeholder('Contact Person'),                
                Select::make('status')->options([ 1 => 'Active', 0 => 'Block'])->default(1) 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Property::select('properties.*','cities.name as city_name', 'areas.name as area_name')
                ->leftJoin('cities','cities.id','=','properties.city_id')
                ->leftJoin('areas','areas.id','=','properties.area_id')                
            )
            ->columns([
                ImageColumn::make('logo')->defaultImageUrl(url('/images/dummy.png'))->circular(),
                TextColumn::make('name'),
                TextColumn::make('phone'),                
                TextColumn::make('city_name'),
                IconColumn::make('status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-x-mark')
            ])
            ->filters([
                //
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
            'index' => Pages\ListDevelopers::route('/'),
            'create' => Pages\CreateDeveloper::route('/create'),
            'edit' => Pages\EditDeveloper::route('/{record}/edit'),
        ];
    }
}
