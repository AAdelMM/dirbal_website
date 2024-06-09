<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn; // استيراد TextColumn

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    public static function getModelLabel(): string
    {
        return 'تصنيف';
    }

    public static function getPluralModelLabel(): string
    {
        return 'التصنيفات';
    }
    protected static ?string $navigationGroup = 'إدارة القبسات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('اسم التصنيف')
                    ->required()
                    ->unique()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->label('تسلسل')
                ->sortable(),
            TextColumn::make('category.name')
                ->label('اسم التصنيف')
                ->sortable()
                ->searchable(),
            TextColumn::make('created_at')
                ->label('تاريخ الإنشاء')
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
