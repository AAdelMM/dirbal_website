<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Ma7kamaOliaResource\Pages;
use App\Filament\Resources\Ma7kamaOliaResource\RelationManagers;
use App\Models\Ma7kamaOlia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\RichEditor;
use App\Filament\Forms\Components\CustomRichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Ma7kamaOliaResource extends Resource
{
    protected static ?string $model = Ma7kamaOlia::class;
    protected static ?string $navigationGroup = 'إضافة المقالات'; // إضافة هذه السطر لتحديد مجموعة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $modelLabel ='حكم محكمة عليا' ;
    protected static ?string $navigationLabel = 'المحكمة العليا';
    public static function getPluralModelLabel(): string
    {
        return 'الاحكام'; // Plural label
    }

    public static function form(Form $form): Form
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
                                        ->integer()
                                        ->required(),
                                    Forms\Components\TextInput::make('ref_number')
                                    ->label('الرقم المرجعي')
                                        ->integer()
                                        ->required(),
                                    Forms\Components\TextInput::make('title')
                                    ->label('العنوان')
                                        ->required()
                                        ->maxLength(255),
                                        CustomRichEditor::make('mogaz')
                                    ->label('موجز')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
                                        ->required(),
                                    Forms\Components\TextInput::make('ka3da_title')
                                    ->label('عنوان القاعدة')
                                        ->required()
                                        ->maxLength(255),
                                        CustomRichEditor::make('ka3da_text')
                                    ->label('نص القاعدة')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
                                        ->required(),
                                        CustomRichEditor::make('dibaga')
                                    ->label('الديباجة')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
                                        ->required(),
                                    Forms\Components\TextInput::make('waka3_title')
                                    ->label('عنوان الواقعة')
                                        ->required()
                                        ->maxLength(255),
                                        CustomRichEditor::make('waka3_text')
                                    ->label('نص الواقعة')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
                                        ->required(),
                                    Forms\Components\TextInput::make('egraa_title')
                                    ->label('عنوان الاجراء')
                                        ->required()
                                        ->maxLength(255),
                                        CustomRichEditor::make('egraa_text')
                                    ->label('نص الاجراء')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
                                        ->required(),
                                    Forms\Components\TextInput::make('reason_title')
                                    ->label('عنوان السبب')
                                        ->required()
                                        ->maxLength(255),
                                        CustomRichEditor::make('reason_text')
                                    ->label('السبب')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
                                        ->required(),
                                    Forms\Components\TextInput::make('hokm_title')
                                    ->label('عنوان الحكم')
                                        ->required()
                                        ->maxLength(255),
                                    CustomRichEditor::make('hokm_text')
                                    ->label('نص الحكم')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'orderedList',
                                        'unorderedList',
                                        'h1',
                                        'h2',
                                        'h3',
                                        'paragraph',
                                        'blockquote',
                                        'codeBlock',
                                        'alignLeft',
                                        'alignCenter',
                                        'alignRight',
                                        'alignJustify',
                                        'undo',
                                        'redo',
                                        'textColor',
                                        'fontSize',
                                    ])
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
            Tables\Columns\TextColumn::make('year')
            ->label('السنة'),
            Tables\Columns\TextColumn::make('month')
            ->label('الشهر'),
            Tables\Columns\TextColumn::make('ref_number')
            ->label('الرقم المرجعى'),
            Tables\Columns\TextColumn::make('title')
            ->label('العنوان'),
            Tables\Columns\TextColumn::make('created_at')
            ->label('اضيفت بتاريخ')
                ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('preview')
                ->label('معاينة')
                ->url(fn (Ma7kamaOlia $record): string => route('ma7kama-olia.preview', $record))
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
