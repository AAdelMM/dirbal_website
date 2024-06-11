<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Filament\Resources\QuoteResource\RelationManagers;
use App\Models\Quote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select; // استيراد Select
use App\Models\Category; // تأكد من استيراد نموذج التصنيفات
use IntlDateFormatter;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;
    public static function getModelLabel(): string
    {
        return 'قبسات';
    }

    public static function getPluralModelLabel(): string
    {
        return 'قبسات'; // Plural label
    }
    protected static ?string $navigationGroup = 'إدارة القبسات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationLabel ='قبسات' ;

    protected static ?string $modelLabel ='قبسات' ;

   
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('عنوان القبسة')
                ->required()
                ->maxLength(255),
            Select::make('category_id')
                ->label('تصنيف القبسة')
                ->options(Category::all()->pluck('name', 'id'))
                ->required(),
            RichEditor::make('body')
                ->label('النص')
                ->required()
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'bulletList',
                    'underline',
                    'h2',
                    'h3',
                    'heading-three',
                    'link',
                    'attach-files',
                ]),
            TextInput::make('source')
                ->label('المصدر')
                ->required()
                ->maxLength(255),
           FileUpload::make('image')
                ->label('صورة')
                ->image()
                ->directory('quotes')
                ->disk('public')
                ->visibility('public'),
        ])
            ->columns(1);//all fields in one column
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')
                ->label('عنوان القبسة')
                ->sortable()
                ->searchable(),
            TextColumn::make('category.name')
                ->label('تصنيف القبسة')
                ->sortable()
                ->searchable(),
            TextColumn::make('body')
                ->label('النص')
                ->formatStateUsing(function ($state) {
                    $maxLength = 70;
                    if (mb_strlen($state, "UTF-8") > $maxLength) {
                        $truncated = mb_substr($state, 0, $maxLength, "UTF-8");
                        $lastSpace = mb_strrpos($truncated, ' ', 0, "UTF-8");
                        if ($lastSpace !== false) {
                            $truncated = mb_substr($state, 0, $lastSpace, "UTF-8");
                        }
                        // استخدم strip_tags لإزالة HTML
                        return strip_tags($truncated) . '... عرض المزيد';
                    }
                     // استخدم strip_tags لإزالة HTML
                     return strip_tags($state);
                }),
            TextColumn::make('source')
                ->label('المصدر'),
            ImageColumn::make('image')
                ->label('صورة')
                ->disk('public')
                ->url(fn ($record) => $record->image ? \Storage::disk('public')->url($record->image) : null),
            TextColumn::make('created_at')
                ->label('تاريخ')
                ->dateTime('d M Y H:i:s')
                ->sortable(),
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
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }
}
