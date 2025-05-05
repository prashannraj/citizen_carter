<?php

namespace App\Filament\Resources\TurismPlaceResource\Pages;

use App\Filament\Resources\TurismPlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTurismPlaces extends ListRecords
{
    protected static string $resource = TurismPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
