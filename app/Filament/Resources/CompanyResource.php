<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ministry'),
                Forms\Components\TextInput::make('company_name')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('state')
                    ->required(),
                    Forms\Components\FileUpload::make('favicon')
                    ->label('Favicon')
                    ->image()
                    ->maxSize(500)
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('favicons')
                    ->imagePreviewHeight('100') // 👈 Preview Image
                    ->openable() // 👈 Allow full view on click
                    ->downloadable(), // 👈 Allow download if needed
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->maxSize(500)
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('logos')
                    ->imagePreviewHeight('100') // 👈 Preview Image,
                    ->openable() // 👈 Allow full view on click
                    ->downloadable(), // 👈 Allow download if needed
                Forms\Components\FileUpload::make('flag')
                    ->label('Flag')
                    ->image()
                    ->maxSize(500)
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('flags')
                    ->imagePreviewHeight('100') // 👈 Preview Image
                    ->openable() // 👈 Allow full view on click
                    ->downloadable(), // 👈 Allow download if needed
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ministry')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('favicon')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('flag')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'view' => Pages\ViewCompany::route('/{record}'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
