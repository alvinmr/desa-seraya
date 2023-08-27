<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilDesaResource\Pages;
use App\Filament\Resources\ProfilDesaResource\RelationManagers;
use App\Models\ProfilDesa;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfilDesaResource extends Resource
{
    protected static ?string $model = ProfilDesa::class;

    protected static string $title = 'Profil Desa';

    protected static ?string $navigationLabel = 'Profil Desa';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('visi')
                        ->autofocus()
                        ->required()
                        ->placeholder('Visi'),
                    Forms\Components\TextInput::make('misi')
                        ->autofocus()
                        ->required()
                        ->placeholder('Misi'),
                    Forms\Components\MarkdownEditor::make('sejarah')
                        ->autofocus()
                        ->required()
                        ->placeholder('Sejarah'),
                ], 'Profil Desa'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('misi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sejarah')
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
            'index' => Pages\ListProfilDesas::route('/'),
            'create' => Pages\CreateProfilDesa::route('/create'),
            'edit' => Pages\EditProfilDesa::route('/{record}/edit'),
        ];
    }
}
