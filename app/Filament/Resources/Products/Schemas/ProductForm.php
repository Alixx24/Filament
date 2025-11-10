<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // 🔹 انتخاب دسته‌بندی
                Select::make('category_id') // بهتره به جای category.name، مستقیماً category_id استفاده بشه
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->placeholder('Select category')
                    ->preload(),

                // 🔹 نام محصول

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

                // 🔹 توضیحات
                Textarea::make('description'),

                // 🔹 قیمت
                TextInput::make('price')
                    ->numeric()
                    ->default(null),

                Repeater::make('images')
                    ->relationship('images')
                    ->label('Product Images')
                    ->schema([
                        FileUpload::make('path')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('products')
                            ->preserveFilenames()
                            ->visibility('public') 
                            ->previewable(true) 
                            ->openable()
                            ->downloadable(), 

                        TextInput::make('alt')
                            ->label('Alt Text'),

                        Toggle::make('is_main')
                            ->label('Main Image'),
                    ])
                    ->columns(2)
                    ->collapsed()
                    ->createItemButtonLabel('➕ Add new image')

            ]);
    }
}
