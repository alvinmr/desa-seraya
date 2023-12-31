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

    protected static ?string $navigationGroup = 'Pengaturan';

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
                    Forms\Components\RichEditor::make('misi')
                        ->autofocus()
                        ->required()
                        ->placeholder('Misi'),
                    Forms\Components\RichEditor::make('sejarah')
                        ->autofocus()
                        ->required()
                        ->placeholder('Sejarah'),
                    Forms\Components\RichEditor::make('wilayah')
                        ->autofocus()
                        ->required()
                        ->placeholder('Wilayah'),
                ], 'Profil Desa'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                Tables\Columns\TextColumn::make('misi')
                    ->searchable()
                    ->markdown()
                    ->limit(10)
                    ->sortable(),
                Tables\Columns\TextColumn::make('sejarah')
                    ->searchable()
                    ->markdown()
                    ->limit(10)
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
