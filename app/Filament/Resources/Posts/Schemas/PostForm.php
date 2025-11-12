<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
            TextInput::make('slug')
    ->required()
    ->unique(
        table: 'posts', // نام جدول دیتابیس
        column: 'slug', // ستون مورد نظر
        ignorable: fn ($record) => $record // تا در هنگام ویرایش خطا ندهد
    ),
                Textarea::make('summary')
                    ->default(null)
                    ->columnSpanFull(),

                MarkdownEditor::make('content')->required()->columnSpanFull(),

   TextInput::make('user_id')
    ->default(auth()->user()->id)
    ->hidden()
    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived'])
                    ->default('draft')
                    ->required(),

                TagsInput::make('tags')->required(),
                DateTimePicker::make('published_at'),
                TextInput::make('meta_title')
                    ->default(null),
                TextInput::make('meta_description')
                    ->default(null),
                TextInput::make('meta_keywords')
                    ->default(null),
                TextInput::make('canonical_url')
                    ->default(null),

                FileUpload::make('thumbnail')->disk('public')->directory('thumbnails')->default(null),





                TextInput::make('alt_text')
                    ->default(null),
                TextInput::make('views')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}
