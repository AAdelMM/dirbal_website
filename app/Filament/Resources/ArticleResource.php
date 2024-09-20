<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Forms\Components\Grid;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'إضافة المقالات';

    public static function getModelLabel(): string
    {
        return 'مقالة';
    }

    public static function getPluralModelLabel(): string
    {
        return 'مقالات';
    }

    protected static ?string $modelLabel = 'مقالة';
    protected static ?string $navigationLabel = 'مقالة';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make(1)
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('عنوان')
                        ->required()
                        ->maxLength(255),
                ]),
            Grid::make(1)
                ->schema([
                    Forms\Components\TextInput::make('sub_title')
                        ->label('عنوان فرعي')
                        ->required()
                        ->maxLength(255),
                ]),
            Grid::make(1)
                ->schema([
                    TinyEditor::make('mogaz')
                        ->label('موجز')
                        ->showMenuBar()
                        ->required()
                        ->maxLength(65535),
                ]),
            Grid::make(1)
                ->schema([
                    Forms\Components\TextInput::make('mokadma_title')
                        ->label('عنوان المقدمة')
                        ->required()
                        ->maxLength(255),
                ]),
            Grid::make(1)
                ->schema([
                    TinyEditor::make('mokadma')
                        ->label('مقدمة')
                        ->showMenuBar()
                        ->required()
                        ->maxLength(65535),
                ]),
            Grid::make(1)
                ->schema([
                    TinyEditor::make('article_text')
                        ->label('نص المقالة')
                        ->showMenuBar()
                        ->required(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('عنوان'),
                Tables\Columns\TextColumn::make('sub_title')
                    ->label('عنوان فرعي'),
                Tables\Columns\TextColumn::make('mogaz')->limit(50)
                    ->label('موجز'),
                Tables\Columns\TextColumn::make('mokadma_title')
                    ->label('عنوان المقدمة'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('أضيفت في'),
            ])
            ->filters([
                // Add any necessary filters here
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('view')
                    ->label('عرض')
                    ->url(fn (Article $record): string => route('articles.view', $record))
                    ->icon('heroicon-o-eye'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define any relations here
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
