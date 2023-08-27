<?php

namespace App\Filament\Resources\LembagaResource\Pages;

use App\Filament\Resources\LembagaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLembaga extends EditRecord
{
    protected static string $resource = LembagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
