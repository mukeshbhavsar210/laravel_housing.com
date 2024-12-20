<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AreaResource\Pages;
use App\Models\Area;
use App\Models\City;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Set;
use Filament\Support\Enums\FontWeight;
use Illuminate\Support\Str;

class AreaResource extends Resource
{
    protected static ?string $model = Area::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Area name')->required()->placeholder('Area Name')
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')->required()->placeholder('Slug'),
                Select::make('city_id')->label('City')->options(City::all()->pluck('name','id')),
                //TextInput::make('designation')->label('Designation')->required()->placeholder('Enter Designation'),
                //FileUpload::make('image'),
                Select::make('status')->options([ 1 => 'Active', 0 => 'Block'])->default(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Area::select('areas.*','cities.name as city_name')
                ->leftJoin('cities','cities.id','=','areas.city_id')                
            )
            ->columns([
                TextColumn::make('name')->label('Area')->weight(FontWeight::Bold),
                TextColumn::make('city_name')->label('City'),
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
            'index' => Pages\ListAreas::route('/'),
            'create' => Pages\CreateArea::route('/create'),
            'edit' => Pages\EditArea::route('/{record}/edit'),
        ];
    }
}
