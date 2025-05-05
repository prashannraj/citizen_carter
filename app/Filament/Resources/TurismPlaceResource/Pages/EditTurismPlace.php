<?php

namespace App\Filament\Resources\TurismPlaceResource\Pages;

use App\Filament\Resources\TurismPlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTurismPlace extends EditRecord
{
    protected static string $resource = TurismPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
