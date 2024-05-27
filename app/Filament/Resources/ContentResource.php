<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use App\Models\Section;
use App\Models\Branch;
use App\Models\Item;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;
    public static function getPluralModelLabel(): string
    {
        return 'المحتوى'; // Plural label
    }
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel ='المحتوى' ;

    protected static ?string $modelLabel ='المحتوى' ;
    protected static ?string $navigationGroup = 'إدارة المحتوى'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?int $navigationSort = 4; // ترتيب العنصر
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('type')
                ->label('نوع المحتوى')
                ->options([
                    'مقال' => 'مقال',
                    'نص حكم' => 'نص حكم قضائي',
                ])
                ->required(),
            Select::make('section_id')
                ->label('القسم')
                ->options(Section::all()->pluck('name', 'id'))
                ->reactive()
                ->required()
                ->afterStateUpdated(fn (callable $set) => $set('branch_id', null)),
            Select::make('branch_id')
                ->label('الفرع')
                ->options(function (callable $get) {
                    $sectionId = $get('section_id');
                    if ($sectionId) {
                        return Branch::where('section_id', $sectionId)->pluck('name', 'id');
                    }
                    return [];
                })
                ->reactive()
                ->required()
                ->afterStateUpdated(fn (callable $set) => $set('item_id', null)),
            Select::make('item_id')
                ->label('العنصر')
                ->options(function (callable $get) {
                    $branchId = $get('branch_id');
                    if ($branchId) {
                        return Item::where('branch_id', $branchId)->pluck('name', 'id');
                    }
                    return [];
                })
                ->reactive(),
                //->required(),
            Textarea::make('text')
                ->label('النص')
                ->required(),
            FileUpload::make('audio_file')
                ->label('ملف صوتي')
                ->disk('public')
                ->directory('audio_files')
                ->visibility('public'),
            TextInput::make('video_link')
                ->label('رابط فيديو')
                ->url(),
        ])
        ->columns(1);

    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('type')->label('نوع المحتوى'),
            TextColumn::make('section.name')->label('القسم'),
            TextColumn::make('branch.name')->label('الفرع'),
            TextColumn::make('item.name')->label('العنصر'),
            TextColumn::make('text')->label('النص')->limit(50),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListContents::route('/'),
            'create' => Pages\CreateContent::route('/create'),
            'edit' => Pages\EditContent::route('/{record}/edit'),
        ];
    }
}
