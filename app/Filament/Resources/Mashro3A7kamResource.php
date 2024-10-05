<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Mashro3A7kamResource\Pages;
use App\Filament\Resources\Mashro3A7kamResource\RelationManagers;
use App\Models\Mashro3A7kam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class Mashro3A7kamResource extends Resource
{
    protected static ?string $model = Mashro3A7kam::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationLabel = 'مشروع احكام';
    protected static ?string $modelLabel = 'مشاريع احكام';
    protected static ?string $navigationGroup = 'إضافة محتوى';
    public static function getPluralModelLabel(): string
    {
        return 'كل الاحكام';
    }
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('year')->label('السنة')->required(),
            Forms\Components\TextInput::make('month')->label('الشهر')->required(),
            Forms\Components\TextInput::make('day')->label('اليوم')->required(),
            Forms\Components\TextInput::make('topic_no')->label('رقم الموضوع (بالارقام)')->required(),
            Forms\Components\TextInput::make('topic_letter')->label('رقم الموضوع (بالاحرف)')->required(),
            Forms\Components\TextInput::make('author')->label('بقلم')->required(),
            Forms\Components\TextInput::make('ref_number')->label('الرقم المسلسل')->required(),
            Forms\Components\Textarea::make('title')->label('العنوان')->required(),
            Forms\Components\Section::make('الموجز')
                ->schema([
                    TinyEditor::make('mogaz')->showMenuBar()->label('الموجز')->nullable(),
                ]),
            Forms\Components\Textarea::make('ka3da_title')->label('عنوان القاعدة')->required(),
            Forms\Components\Section::make('نص القاعدة')
                ->schema([
                    TinyEditor::make('ka3da_text')->showMenuBar()->label('نص القاعدة')->required(),
                ]),
            Forms\Components\Section::make('الديباجة')
                ->schema([
                    TinyEditor::make('dibaga')->showMenuBar()->label('الديباجة')->required(),
                ]),
            Forms\Components\Textarea::make('wak3a_title')->label('عنوان الواقعة')->required(),
            Forms\Components\Section::make('نص الواقعة')
                ->schema([
                    TinyEditor::make('wak3a_text')->showMenuBar()->label('نص الواقعة')->required(),
                ]),
            Forms\Components\Textarea::make('egraa_title')->label('عنوان الاجراء')->nullable(),
            Forms\Components\Section::make('نص الاجراء')
                ->schema([
                    TinyEditor::make('egraa_text')->showMenuBar()->label('نص الاجراء')->nullable(),
                ]),
            Forms\Components\Textarea::make('reason_title')->label('عنوان السبب')->required(),
            Forms\Components\Section::make('نص السبب')
                ->schema([
                    TinyEditor::make('reason_text')->label('نص السبب')->showMenuBar()->required(),
                ]),
            Forms\Components\Textarea::make('7okm_title')->label('عنوان الحكم')->required(),
            Forms\Components\Section::make('نص الحكم')
                ->schema([
                    TinyEditor::make('7okm_text')->label('نص الحكم')->showMenuBar()->required(),
                ]),
            Forms\Components\FileUpload::make('audio_files')
                ->label('ملفات صوتية')
                ->directory('audio_files')
                ->acceptedFileTypes(['audio/mp3'])
                ->nullable(),
            Forms\Components\FileUpload::make('pdf_files')
                ->label('ملف نصى')
                ->directory('pdf_files')
                ->acceptedFileTypes(['application/pdf'])
                ->nullable(),
            Forms\Components\Toggle::make('updated')->label('محدث'),
            Forms\Components\Select::make('section_id')
                ->label('القسم')
                ->relationship('section', 'name')
                ->required(),
            Forms\Components\Select::make('branch_id')
                ->label('الفرع')
                ->relationship('branch', 'name')
                ->required(),
            Forms\Components\Select::make('item_id')
                ->label('العنصر')
                ->relationship('item', 'name')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')->label('السنة'),
                Tables\Columns\TextColumn::make('month')->label('الشهر'),
                Tables\Columns\TextColumn::make('day')->label('اليوم'),
                
                Tables\Columns\TextColumn::make('author')->label('الكاتب'),
                Tables\Columns\TextColumn::make('ref_number')->label('الرقم المسلسل'),
                Tables\Columns\TextColumn::make('title')->label('العنوان'),
                Tables\Columns\BooleanColumn::make('updated')->label('محدث'), //
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
            'index' => Pages\ListMashro3A7kams::route('/'),
            'create' => Pages\CreateMashro3A7kam::route('/create'),
            'edit' => Pages\EditMashro3A7kam::route('/{record}/edit'),
        ];
    }
}
