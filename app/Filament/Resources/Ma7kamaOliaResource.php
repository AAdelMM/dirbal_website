<?php
namespace App\Filament\Resources;

use App\Filament\Resources\Ma7kamaOliaResource\Pages;
use App\Models\Ma7kamaOlia;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class Ma7kamaOliaResource extends Resource
{
    protected static ?string $model = Ma7kamaOlia::class;
    protected static ?string $navigationGroup = 'إضافة المقالات';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $modelLabel = 'حكم محكمة عليا';
    protected static ?string $navigationLabel = 'المحكمة العليا';

    public static function getPluralModelLabel(): string
    {
        return 'الاحكام';
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Tabs::make('Main')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('المحكمة العليا')
                                    ->schema([
                                        Forms\Components\TextInput::make('year')
                                            ->label('السنة')
                                            ->integer()
                                            ->required(),
                                        Forms\Components\TextInput::make('month')
                                            ->label('الشهر')
                                            ->integer(),
                                        Forms\Components\TextInput::make('day')
                                            ->label('اليوم')
                                            ->integer(), // New field for day
                                        Forms\Components\TextInput::make('topic_number_numeric')
                                            ->label('رقم الموضوع (ارقام)')
                                            ->integer()
                                            ->required(), // Split topic_number into numeric
                                        Forms\Components\TextInput::make('topic_number_alpha')
                                            ->label('رقم الموضوع (حروف)')
                                            ->required(), // Split topic_number into letters
                                       
                                        Forms\Components\TextInput::make('author')
                                            ->label('كاتب الموضوع')
                                            ->required(),
                                        Forms\Components\TextInput::make('title')
                                            ->label('العنوان')
                                            ->required()
                                            ->maxLength(255),
                                        TinyEditor::make('subtitle')
                                            ->label('الموجز')
                                            ->profile('default')
                                            ->showMenuBar()
                                            ->required(),                        
                                        Forms\Components\TextInput::make('ka3da_title')
                                            ->label('عنوان القاعدة')
                                            ->required()
                                            ->maxLength(255),
                                        TinyEditor::make('ka3da_text')
                                            ->label('نص القاعدة')
                                            ->profile('default')
                                            ->showMenuBar()
                                            ->required(),
                                        TinyEditor::make('dibaga')
                                            ->label('الديباجة')
                                            ->profile('default')
                                            ->showMenuBar()
                                            ->required(),
                                        Forms\Components\TextInput::make('waka3_title')
                                            ->label('عنوان الواقعة')
                                            ->required()
                                            ->maxLength(255),
                                        TinyEditor::make('waka3_text')
                                            ->label('نص الواقعة')
                                            ->profile('default')
                                            ->showMenuBar()
                                            ->required(),
                                        Forms\Components\TextInput::make('egraa_title')
                                            ->label('عنوان الاجراء')
                                            ->required()
                                            ->maxLength(255),
                                        TinyEditor::make('egraa_text')
                                            ->label('نص الاجراء')
                                            ->profile('default')
                                            ->showMenuBar()
                                            ->required(),
                                        Forms\Components\TextInput::make('reason_title')
                                            ->label('عنوان السبب')
                                            ->required()
                                            ->maxLength(255),
                                        TinyEditor::make('reason_text')
                                            ->label('السبب')
                                            ->profile('default')
                                            ->showMenuBar()
                                            ->required(),
                                        Forms\Components\TextInput::make('hokm_title')
                                            ->label('عنوان الحكم')
                                            ->required()
                                            ->maxLength(255),
                                        TinyEditor::make('hokm_text')
                                            ->label('نص الحكم')
                                            ->profile('default')
                                            ->required()
                                            ->showMenuBar(),
                                        Forms\Components\FileUpload::make('mp3_file')
                                            ->label('ملف MP3') // New field for MP3 file
                                            ->acceptedFileTypes(['audio/mpeg', 'audio/mp3'])
                                            ->disk('public')
                                            ->directory('mp3_files')
                                            ->visibility('public'),
                                        Forms\Components\FileUpload::make('pdf_file')
                                            ->label('ملف PDF') // New field for PDF file
                                            ->acceptedFileTypes(['application/pdf'])
                                            ->disk('public')
                                            ->directory('pdf_files')
                                            ->visibility('public'),
                                        Forms\Components\Checkbox::make('is_updated')
                                            ->label('محدث') // New checkbox for "updated"
                                            ->default(false),
                                    ])
                            ])
                    ])
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')->label('السنة'),
                Tables\Columns\TextColumn::make('month')->label('الشهر'),
                Tables\Columns\TextColumn::make('day')->label('اليوم'), // New day column
                Tables\Columns\TextColumn::make('ref_number')->label('الرقم المرجعى'),
                Tables\Columns\TextColumn::make('title')->label('العنوان'),
                Tables\Columns\BooleanColumn::make('is_updated')
                    ->label('محدث'), // New "updated" column
                Tables\Columns\TextColumn::make('created_at')->label('اضيفت بتاريخ')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('preview')
                    ->label('معاينة')
                    ->url(fn(Ma7kamaOlia $record): string => route('ma7kama-olia.preview', $record))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListMa7kamaOlias::route('/'),
            'create' => Pages\CreateMa7kamaOlia::route('/create'),
            'view' => Pages\ViewMa7kamaOlia::route('/{record}'),
            'edit' => Pages\EditMa7kamaOlia::route('/{record}/edit'),
        ];
    }
}
