<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\PasswordInput;
use IntlDateFormatter;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    public static function getModelLabel(): string
    {
        return 'مستخدم';
    }

    protected static ?string $navigationIcon = 'heroicon-o-key';
    protected static ?string $navigationLabel = 'إدارة المستخدمين';
    protected static ?string $pluralModelLabel = 'المستخدمين';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('name')
                ->label('الاسم')
                ->required(),
            TextInput::make('email')
                ->label('البريد الإلكتروني')
                ->email()
                ->required(),
                TextInput::make('password')
                ->label('كلمة المرور')
                ->password()
                ->required(fn($context) => $context === 'create')
                ->dehydrateStateUsing(fn($state) => bcrypt($state)),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')
                ->label('الاسم')
                ->sortable()
                ->searchable(),
            TextColumn::make('email')
                ->label('البريد الإلكتروني')
                ->sortable()
                ->searchable(),
            TextColumn::make('created_at')
                ->label('تاريخ الإنشاء')
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
