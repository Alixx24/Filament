<?php

namespace App\Filament\Resources\Categories\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str; 

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('parent_id')
                    ->relationship('parent', 'name', fn(Builder $query) => $query->whereNull('parent_id'))
                    ->searchable()
                    ->placeholder('Select parent category')
                    ->preload(),

           
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255)
                    ->debounce(700) 
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required(),

                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),

                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->default(0),

                Toggle::make('is_visible')
                    ->required(),

                TextInput::make('seo_title')
                    ->default(null),

                TextInput::make('seo_description')
                    ->default(null),
            ]);
    }
}
