<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TagsInput;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
          return $schema
            ->components([
                Section::make('Create a Post')
                    ->collapsible()
                    ->schema([
               
                      Select::make('category_id')
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
   MarkdownEditor::make('description_fa')->nullable()->columnSpanFull(),

     Textarea::make('summary')
                            ->default(null)
                            ->columnSpanFull(),

                TextInput::make('price')
                    ->numeric()
                    ->default(null),

                      TagsInput::make('tags')->required(),
                        FileUpload::make('thumbnail')->disk('public')->directory('thumbnails')->default(null),

                        TextInput::make('alt_text')
                            ->default(null),

                TextInput::make('status')
                    ->numeric()
                    ->default(0),

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
   ])->columns(2)->columnSpan(2),

                Section::make('Seo')
                    ->collapsible()
                    ->schema([
                        TextInput::make('meta_title')
                            ->default(null),
                        TextInput::make('meta_description')
                            ->default(null),
                        TextInput::make('meta_keywords')
                            ->default(null),
                        TextInput::make('canonical_url')
                            ->default(null),


                    ])->columns(2)->columnSpan(2),


            ]);
    }
}
