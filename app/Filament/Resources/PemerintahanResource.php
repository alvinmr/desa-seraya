<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemerintahanResource\Pages;
use App\Filament\Resources\PemerintahanResource\RelationManagers;
use App\Models\Pemerintahan;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PemerintahanResource extends Resource
{
    protected static ?string $model = Pemerintahan::class;

    protected static string $title = 'Struktur Pemerintahan';

    protected static ?string $navigationLabel = 'Struktur Pemerintahan';

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('nama')
                        ->autofocus()
                        ->required()
                        ->placeholder('Nama'),
                    Forms\Components\TextInput::make('jabatan')
                        ->autofocus()
                        ->required()
                        ->placeholder('Jabatan'),
                    Forms\Components\FileUpload::make('foto')
                        ->autofocus()
                        ->placeholder('Foto'),
                ], 'Struktur Pemerintahan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->searchable()
                    ->sortable(),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPemerintahans::route('/'),
            'create' => Pages\CreatePemerintahan::route('/create'),
            'edit' => Pages\EditPemerintahan::route('/{record}/edit'),
        ];
    }    
}
