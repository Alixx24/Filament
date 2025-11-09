<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use App\Models\Product;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Tables\Columns\TextColumn;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category.name') // استفاده از relationship صحیح
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->placeholder('Select category')
                    ->preload(),

                TextInput::make('name')

                    ->required()
                    ->maxLength(255)
                    ->debounce(700)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->dehydrated()
                    ->required()
                    ->unique(Product::class, 'slug', ignoreRecord: true),
                Textarea::make('description'),
                TextInput::make('price')
                    ->default(null),



            ]);
    }
}
