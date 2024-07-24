<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KararNiabahResource\Pages;
use App\Filament\Resources\KararNiabahResource\RelationManagers;
use App\Models\KararNiabah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;

class KararNiabahResource extends Resource
{
    protected static ?string $model = KararNiabah::class;
    protected static ?string $navigationGroup = 'إضافة المقالات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    
    public static function getModelLabel(): string
    {
        return 'قرار نيابة';
    }

    public static function getPluralModelLabel(): string
    {
        return 'قرارات'; // Plural label
    }
    protected static ?string $modelLabel ='قرار نيابة ' ;
    protected static ?string $navigationLabel = 'قرار نيابة';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('العنوان')
                ->required()
                ->maxLength(255),
                Forms\Components\RichEditor::make('mogaz_text')
                ->label('الموجز')
                    ->required(),
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
                ->label('العنوان'),
                Tables\Columns\TextColumn::make('created_at')
                ->label('تاريخ الاضافة')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('تاريخ التعديل')
                    ->dateTime(),//
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
            'index' => Pages\ListKararNiabahs::route('/'),
            'create' => Pages\CreateKararNiabah::route('/create'),
            'edit' => Pages\EditKararNiabah::route('/{record}/edit'),
        ];
    }


    protected static function customRichEditor($name): RichEditor
    {
        return RichEditor::make($name)
            ->toolbarButtons([
                'bold',
                'italic',
                'underline',
                'strike',
                'fontFamily',
                'fontSize',
                'color',
                'highlight',
                'alignLeft',
                'alignCenter',
                'alignRight',
                'alignJustify',
                'bulletList',
                'orderedList',
                'link',
                'undo',
                'redo',
            ])
            ->extraInputAttributes(['style' => 'height: 350px'])
            ->extraTipTapAttributes([
                'extensions' => [
                    'TextStyle',
                    'Color',
                ],
            ]);
    }
}
