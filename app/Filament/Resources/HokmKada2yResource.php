<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HokmKada2yResource\Pages;
use App\Filament\Resources\HokmKada2yResource\RelationManagers;
use App\Models\HokmKada2y;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;


class HokmKada2yResource extends Resource
{
    protected static ?string $model = HokmKada2y::class;

    protected static ?string $navigationGroup = 'إضافة المقالات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    
    public static function getModelLabel(): string
    {
        return 'احكام';
    }

    public static function getPluralModelLabel(): string
    {
        return 'الاحكام'; // Plural label
    }
    protected static ?string $modelLabel ='حكم قضائي' ;
    protected static ?string $navigationLabel = 'الحكم القضائى';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Tabs::make('Main')
                        ->tabs([
                            Forms\Components\Tabs\Tab::make('الحكم القضائى')
                                ->schema([
                                    Forms\Components\TextInput::make('month')
                                        ->label('السنة')
                                        ->integer()
                                        ->required(),
                                    Forms\Components\TextInput::make('day')
                                    ->label('الشهر')
                                        ->integer()
                                        ->required(),
                                   
                                    Forms\Components\Textarea::make('mogaz')
                                    ->label('الموجز')
                                        ->required()
                                        ->maxLength(65535),
                                        Forms\Components\TextInput::make('ka3da_title')
                                        ->label('عنوان القاعدة')
                                            ->required()
                                            ->maxLength(255),
                                    TinyEditor::make('ka3da')
                                    ->label('القاعدة')
                                    ->showMenuBar()
                                        ->required()
                                        ->maxLength(65535),
                                   
                                    TinyEditor::make('dibaga')
                                    ->label('الديباجة')
                                    ->showMenuBar()
                                        ->required(),
                                    Forms\Components\TextInput::make('wak3a_title')
                                    ->label('عنوان الواقعة')
                                        ->required()
                                        ->maxLength(255),
                                        TinyEditor::make('wak3a_summary')
                                    ->label('ملخص الواقعة')
                                    ->showMenuBar()
                                        ->required(),
                                        Forms\Components\TextInput::make('reason_title')
                                        ->label('عنوان السبب')
                                            ->required()
                                            ->maxLength(255),
                                            TinyEditor::make('reason')
                                    ->label('السبب')
                                    ->showMenuBar()
                                        ->required(),
                                   
                                        Forms\Components\TextInput::make('hokm_title')
                                        ->label('عنوان الحكم')
                                        ->required()
                                        ->maxLength(255),
                                        TinyEditor::make('hokm')
                                    ->label('الحكم')
                                    ->showMenuBar()   
                                     ->required(),
                                ])
                        ])
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('month')
            ->label('السنة'),
            Tables\Columns\TextColumn::make('day')
            ->label('اليوم'),
            Tables\Columns\TextColumn::make('hokm_title')
            ->label('عنوان الحكم'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('تاريخ الاضافة'),
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
            'index' => Pages\ListHokmKada2ies::route('/'),
            'create' => Pages\CreateHokmKada2y::route('/create'),
            'edit' => Pages\EditHokmKada2y::route('/{record}/edit'),
        ];
    }
}
