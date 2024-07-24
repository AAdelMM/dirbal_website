<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'إضافة المقالات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    public static function getModelLabel(): string
    {
        return 'مقالة';
    }

    public static function getPluralModelLabel(): string
    {
        return 'مقالات'; // Plural label
    }
    protected static ?string $modelLabel ='  مقالة' ;
    protected static ?string $navigationLabel = '  مقالة ';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('عنوان')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('sub_title')
            ->label('عنوان فرعي')

                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('mogaz')
            ->label('موجز')

                ->required()
                ->maxLength(65535),
            Forms\Components\TextInput::make('mokadma_title')
            ->label('عنوان المقدمة')

                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('mokadma')
            ->label('مقدمة')

                ->required()
                ->maxLength(65535),
            Forms\Components\RichEditor::make('article_text')
            ->label('نص المقالة')

                ->required(),//
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
                ->label(' اضيفت فى') //
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
