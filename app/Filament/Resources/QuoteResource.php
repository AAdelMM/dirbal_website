<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Filament\Resources\QuoteResource\RelationManagers;
use App\Models\Quote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use IntlDateFormatter;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;
    public static function getModelLabel(): string
    {
        return 'قبسات';
    }

    public static function getPluralModelLabel(): string
    {
        return 'قبسات'; // Plural label
    }
    
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationLabel ='قبسات' ;

    protected static ?string $modelLabel ='قبسات' ;

   
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->label('صورة')
                ->image()
                ->directory('quotes') // Specify the directory
                ->disk('public') // Use the public disk
                ->visibility('public'), // Ensure the file is publicly accessible,
                Textarea::make('body')
                ->label('النص')
                ->required()
                ->rows(5)
                ->maxLength(1024)
                ->label('النص'),
                    
                TextInput::make('source')
                ->label('المصدر')
                ->required()
                ->maxLength(255),
                //
            ])
            ->columns(1);//all fields in one column
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //columns in the table
                Tables\Columns\TextColumn::make('body')
                ->label('النص')
                ->formatStateUsing(function ($state) {
                    $maxLength = 70; // Maximum length of the string
                    if (mb_strlen($state, "UTF-8") > $maxLength) {
                        $truncated = mb_substr($state, 0, $maxLength, "UTF-8");
                        // Find the position of the last space in the truncated string
                        $lastSpace = mb_strrpos($truncated, ' ', 0, "UTF-8");
                        if ($lastSpace !== false) {
                            $truncated = mb_substr($state, 0, $lastSpace, "UTF-8");
                        }
                        return $truncated . '  ...     عرض المزيد';
                    }
                    return $state;
                }),
                Tables\Columns\TextColumn::make('source')
                ->label('المصدر'),
               
                ImageColumn::make('image')
                ->label('صورة')
                ->disk('public') // Ensure you're specifying the disk
                ->visibility('public'), // Public images
                
              //  ->defaultImageUrl('public/quotes'),
                Tables\columns\TextColumn::make('created_at')
                ->label('تاريخ')
                ->formatStateUsing(function ($state) {
                    $formatter = new IntlDateFormatter(
                        'ar', // Arabic locale
                        IntlDateFormatter::LONG, // Use the long format for the date
                        IntlDateFormatter::NONE, // Do not include the time
                        'UTC', // Specify the timezone
                        IntlDateFormatter::GREGORIAN // Calendar type
                    );

                    // Format the date to "مايو 2024"
                    return $formatter->format(new \DateTime($state));
                })
                ->sortable()
                ->searchable(),

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
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }
}
