<?php

namespace App\Filament\Resources\PemerintahanResource\Pages;

use App\Filament\Resources\PemerintahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemerintahan extends EditRecord
{
    protected static string $resource = PemerintahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
