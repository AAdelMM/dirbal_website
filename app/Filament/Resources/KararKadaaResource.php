<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KararKadaaResource\Pages;
use App\Filament\Resources\KararKadaaResource\RelationManagers;
use App\Models\KararKadaa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KararKadaaResource extends Resource
{
    protected static ?string $model = KararKadaa::class;
    protected static ?string $navigationGroup = 'إضافة المقالات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-right';
    public static function getModelLabel(): string
    {
        return 'قرارات';
    }

    public static function getPluralModelLabel(): string
    {
        return 'قرارات'; // Plural label
    }
    protected static ?string $modelLabel ='قرار قضائي' ;
    protected static ?string $navigationLabel = ' قرار قضائي';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('العنوان')
                ->required()
                ->maxLength(255),
            Forms\Components\RichEditor::make('text')
            ->label('النص')
                ->required(),
            Forms\Components\ColorPicker::make('text_color')
            ->label('لون النص'),
            Forms\Components\TextInput::make('font_size')
            ->label('حجم النص')
                ->numeric()
                ->minValue(1)
                ->maxValue(100),//
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                    Tables\Columns\TextColumn::make('title'),
                    Tables\Columns\TextColumn::make('text')
                        ->limit(50)
                        ->html(),
                    Tables\Columns\ColorColumn::make('text_color'),
                    Tables\Columns\TextColumn::make('font_size'), //
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
            'index' => Pages\ListKararKadaas::route('/'),
            'create' => Pages\CreateKararKadaa::route('/create'),
            'edit' => Pages\EditKararKadaa::route('/{record}/edit'),
        ];
    }
}
