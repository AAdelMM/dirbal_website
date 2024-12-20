<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Makalat3amaResource\Pages;
use App\Filament\Resources\Makalat3amaResource\RelationManagers;
use App\Models\Makalat3ama;
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
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DatePicker;
use App\Models\Branch;
use App\Models\Item;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

use Filament\Tables\Columns\DateTimeColumn;

class Makalat3amaResource extends Resource
{
    protected static ?string $model = Makalat3ama::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationLabel = 'مقالات';
    protected static ?string $modelLabel = 'المقالات';
    protected static ?string $navigationGroup = 'إضافة محتوى';
    
    public static function getPluralModelLabel(): string
    {
        return 'كل المقالات';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([  // Two-column layout for most fields
                    TextInput::make('title')
                        ->label('عنوان')
                        ->required(),
                        Forms\Components\TextInput::make('topic_no')->label('رقم الموضوع (بالارقام)')->required(),
            Forms\Components\TextInput::make('topic_letter')->label('رقم الموضوع (بالاحرف)')->required(),
                    Textarea::make('mola5s')
                        ->label('ملخص')
                        ->required(),
                    TextInput::make('ref_number')
                        ->label('رقم مسلسل')
                        ->numeric()
                        ->required(),
                    Toggle::make('publish')
                    ->label('نشر'),
                    FileUpload::make('image')
                        ->label('صورة')
                        ->directory('images')
                        ->nullable(),
                    TextInput::make('video')
                        ->label('رابط الفيديو'),
                    TextInput::make('author')
                        ->label('الكاتب')
                        ->required(),
                    Toggle::make('updated')
                        ->label('محدث'),
                    TextInput::make('day')
                        ->label('اليوم')
                        ->numeric()
                        ->required(),
                    TextInput::make('month')
                        ->label('الشهر')
                        ->numeric()
                        ->required(),
                    TextInput::make('year')
                        ->label('السنة')
                        ->numeric()
                        ->required(),

                    // Dropdowns for Section, Branch, and Item
                    Select::make('section_id')
                        ->label('القسم')
                        ->relationship('section', 'name')
                        ->reactive()
                        ->required()
                        ->afterStateUpdated(fn (callable $set) => $set('branch_id', null)),
                    
                        Select::make('branch_id')
                        ->label('الفرع')
                        ->relationship('branch', 'name')
                        ->options(function (callable $get) {
                            $sectionId = $get('section_id');

                            if (!$sectionId) {
                                return [];  // Return empty array if no section is selected
                            }

                            return Branch::where('section_id', $sectionId)
                                ->pluck('name', 'id');  // Fetch branches based on section
                        })
                        ->reactive()
                        ->required()
                        ->afterStateUpdated(fn (callable $set) => $set('item_id', null)),
                   
                        Select::make('item_id')
                        ->label('العنصر')
                        ->nullable()
                        ->options(function (callable $get) {
                            $branchId = $get('branch_id');

                            if (!$branchId) {
                                return [];  // Return empty array if no branch is selected
                            }

                            return Item::where('branch_id', $branchId)
                                ->pluck('name', 'id');  // Fetch items based on branch
                        })
                        ->nullable(),
                ]),

                // Separate section for the article text to make it span the whole row
                Grid::make(1)->schema([
                    TinyEditor::make('article_text')
                        ->label('نص المقال')
                        ->showMenuBar()
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Ref Number Column
                TextColumn::make('ref_number')
                    ->label('مسلسل')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('publish')
                    ->boolean()
                    ->label('حالة النشر'),
                // Section Column (via relationship)
                TextColumn::make('section.name')
                    ->label('قسم')
                    ->sortable()
                    ->searchable(),

                // Branch Column (via relationship)
                TextColumn::make('branch.name')
                    ->label('فرع')
                    ->sortable()
                    ->searchable(),

                // Item Column (via relationship)
                TextColumn::make('item.name')
                    ->label('عنصر')
                    ->sortable()
                    ->searchable(),

                // Summary Column
                TextColumn::make('mola5s')
                    ->label('ملخص')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),

                // Created At Column
                TextColumn::make('created_at')
                    ->label('اضيفت بتاريخ')
                    ->dateTime(),

                // Updated At Column
                Tables\Columns\BooleanColumn::make('updated')
                    ->label('محدث'),
                
                
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
            'index' => Pages\ListMakalat3amas::route('/'),
            'create' => Pages\CreateMakalat3ama::route('/create'),
            'edit' => Pages\EditMakalat3ama::route('/{record}/edit'),
        ];
    }
}
