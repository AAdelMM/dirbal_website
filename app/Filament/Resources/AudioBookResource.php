<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AudioBookResource\Pages;
use App\Filament\Resources\AudioBookResource\RelationManagers;
use App\Models\AudioBook;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AudioBookResource extends Resource
{
    protected static ?string $model = AudioBook::class;

    protected static ?string $navigationIcon = 'heroicon-o-play';
    protected static ?string $navigationGroup = 'إضافة المقالات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    public static function getModelLabel(): string
    {
        return 'كتاب';
    }

    public static function getPluralModelLabel(): string
    {
        return 'كتب'; // Plural label
    }
    protected static ?string $modelLabel =' كتاب صوتي' ;
    protected static ?string $navigationLabel = ' كتاب صوتي ';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('العنوان')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('mogaz')
            ->label('موجز')
                ->required()
                ->maxLength(65535),
            Forms\Components\TextInput::make('mokadma_title')
            ->label('مقدمة عنوان')
                ->required()
                ->maxLength(255),
            Forms\Components\RichEditor::make('mokadma_text')
            ->label('نص المقدمة')
                ->required(),
            Forms\Components\RichEditor::make('article_text')
            ->label('نص المقال')
                ->required(),
            Forms\Components\FileUpload::make('file_upload')
            ->label('رفع الملف الصوتي')
                ->acceptedFileTypes(['audio/mpeg', 'audio/mp3', 'audio/wav'])
                ->directory('audio-books')
                ->maxSize(50 * 1024), // 50MB max size//
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->label('العنوان'),
                Tables\Columns\TextColumn::make('mogaz')->limit(50)
                ->label('موجز'),
                Tables\Columns\TextColumn::make('mokadma_title')
                ->label('عنوان مقدمة'),
                Tables\Columns\TextColumn::make('file_upload')
                ->label('رفع الملف الصوتي'),
                Tables\Columns\TextColumn::make('created_at')
                ->label('  اضيفت')
                    ->dateTime(), //
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
            'index' => Pages\ListAudioBooks::route('/'),
            'create' => Pages\CreateAudioBook::route('/create'),
            'edit' => Pages\EditAudioBook::route('/{record}/edit'),
        ];
    }
}
