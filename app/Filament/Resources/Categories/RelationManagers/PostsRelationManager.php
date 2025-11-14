<?php

namespace App\Filament\Resources\Categories\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Create a Post')
                    ->collapsible()
                    ->schema([

                        TextInput::make('title')->required(),

                        TextInput::make('slug')
                            ->required()
                            ->unique(
                                table: 'posts',
                                column: 'slug',
                                ignorable: fn($record) => $record
                            ),

                        Textarea::make('summary')
                            ->default(null)
                            ->columnSpanFull(),

                        MarkdownEditor::make('content')
                            ->required()
                            ->columnSpanFull(),

                        Select::make('status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'archived' => 'Archived',
                            ])
                            ->default('draft')
                            ->required(),

                        TagsInput::make('tags')->required(),

                        FileUpload::make('thumbnail')
                            ->disk('public')
                            ->directory('thumbnails'),

                        TextInput::make('alt_text')->default(null),

                        TextInput::make('views')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_featured')
                            ->default(false),

                        DateTimePicker::make('published_at'),
                    ])
                    ->columns(2)
                    ->columnSpan(2),


                Section::make('SEO')
                    ->collapsible()
                    ->schema([
                        TextInput::make('meta_title'),
                        TextInput::make('meta_description'),
                        TextInput::make('meta_keywords'),
                        TextInput::make('canonical_url'),
                    ])
                    ->columns(2)
                    ->columnSpan(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')->searchable(),
            ])

            ->headerActions([
                CreateAction::make()
                    ->action(function ($data, $record, $livewire) {

                        // 🔥 ذخیره صحیح و قطعی user_id + category_id + تمام فیلدها
                        $livewire->getRelationship()->create([
                            ...$data,
                            'user_id' => auth()->id(),           // ← ذخیره کاربر
                            'category_id' => $livewire->ownerRecord->id, // ← جلوگیری از null شدن
                        ]);
                    }),

                AssociateAction::make(),
            ])

            ->recordActions([
                EditAction::make(),
                DissociateAction::make(),
                DeleteAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
