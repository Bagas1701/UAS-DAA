<?php

namespace App\Filament\Admin\Resources\PapanKlasemenResource\Pages;

use App\Filament\Admin\Resources\PapanKlasemenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPapanKlasemens extends ListRecords
{
    protected static string $resource = PapanKlasemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
