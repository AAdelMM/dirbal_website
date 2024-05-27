<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;
    public static function getPluralModelLabel(): string
    {
        return 'العناصر'; // Plural label
    }
    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-right';
    protected static ?string $navigationLabel ='العناصر' ;

    protected static ?string $modelLabel ='العناصر' ;
    protected static ?string $navigationGroup = 'إدارة المحتوى'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('اسم العنصر'),
            Forms\Components\Select::make('branch_id')
                ->relationship('branch', 'name')
                ->required()
                ->label('الفرع'),//
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('اسم العنصر')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('branch.name')
                ->label('الفرع')
                ->sortable()
                ->searchable(),//
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
