<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KitabSawtyResource\Pages;
use App\Filament\Resources\KitabSawtyResource\RelationManagers;
use App\Models\KitabSawty;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use App\Models\Branch;
use App\Models\Item;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Illuminate\Support\Facades\Log;
use Filament\Tables\Columns\TextColumn;

class KitabSawtyResource extends Resource
{
    protected static ?string $model = KitabSawty::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationLabel = 'كتب صوتية';
    protected static ?string $modelLabel = 'الكتب';
    protected static ?string $navigationGroup = 'إضافة محتوى';
    
    public static function getPluralModelLabel(): string
    {
        return 'كل الكتب';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('day')
                ->numeric()
                ->minValue(1)
                ->maxValue(31)
                ->label('اليوم'),
                Forms\Components\TextInput::make('month')
                ->numeric()
                ->minValue(1)
                ->maxValue(12)
                ->label('الشهر'),
                Forms\Components\TextInput::make('year')
                ->numeric()
                ->minValue(1900)
                ->maxValue(date('Y'))
                ->label('السنة'),
                // Group ref_number and 3nwan fields on the same line
                Forms\Components\Grid::make(1)->schema([  // 2 means two columns
                    Forms\Components\TextInput::make('title')
                        ->label('العنوان')
                        ->nullable() // Allow null values
                        ->required(),
                    
                    Forms\Components\TextInput::make('ref_number')
                        ->label('رقم مسلسل')
                        ->required(),
                ]),
    
                // Text editor (TinyMCE) on its own line
                Forms\Components\Grid::make(1)->schema([
                TinyEditor::make('text')
                    ->label('النص')
                    ->showMenuBar()
                    ->required(),
                ]),
    
                // Other fields below the text editor
                Forms\Components\Textarea::make('mola5s')
                    ->label('الملخص')
                    ->required(),
    
                Forms\Components\FileUpload::make('audio_file')
                    ->label('الملف الصوتى')
                    ->directory('audio_files')
                    ->acceptedFileTypes(['audio/mpeg', 'audio/mp3'])
                    ->maxSize()
                   
                    ->nullable(),
    
                Forms\Components\FileUpload::make('image')
                    ->label('صورة')
                    ->directory('images')
                    ->nullable(),
    
                Forms\Components\TextInput::make('video_url')
                    ->label('رابط الفيديو')
                    ->nullable(),
    
                Forms\Components\TextInput::make('author')
                    ->label('الكاتب')
                    ->required(),
    
                Forms\Components\TextInput::make('editor')
                    ->label('المحرر')
                    ->required(),
    
                Toggle::make('updated')
                    ->label('محدث'),
                    
                // Section, Branch, and Item dropdowns
                Forms\Components\Select::make('section_id')
                    ->label('قسم')
                    ->relationship('section', 'name')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('branch_id', null)),
                    
                Forms\Components\Select::make('branch_id')
                    ->label('فرع')
                    ->relationship('branch', 'name')
                    ->options(function (callable $get) {
                        $sectionId = $get('section_id');
    
                        if (!$sectionId) {
                            return [];  // Return empty array if no section is selected
                        }
    
                        return Branch::where('section_id', $sectionId)
                            ->pluck('name', 'id');  // Fetch branches based on section
                    })
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('item_id', null)),
    
                Forms\Components\Select::make('item_id')
                    ->label('عنصر')
                    ->nullable()
                    ->options(function (callable $get) {
                        $branchId = $get('branch_id');
    
                        if (!$branchId) {
                            return [];  // Return empty array if no branch is selected
                        }
    
                        return Item::where('branch_id', $branchId)
                            ->pluck('name', 'id');  // Fetch items based on branch
                    }),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ref_number')->label('رقم مسلسل'),
                TextColumn::make('section.name')->label('قسم'),
                TextColumn::make('branch.name')->label('فرع'),
                TextColumn::make('item.name')->label('عنصر'),
                TextColumn::make('mola5s')->label('ملخص'),
                TextColumn::make('created_at')->label('اضيف بتاريخ')->dateTime(), // Changed to TextColumn with ->dateTime()
                Tables\Columns\BooleanColumn::make('updated')->label('محدث'), // Updated column
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('تحديث')->action(fn ($record) => redirect()->route('filament.resources.kitab-sawty.edit', $record)), // Update button action
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKitabSawties::route('/'),
            'create' => Pages\CreateKitabSawty::route('/create'),
            'edit' => Pages\EditKitabSawty::route('/{record}/edit'),
        ];
    }
}
