<?php

namespace App\Filament\Admin\Resources\EvaluasiKesehatanResource\Pages;

use App\Filament\Admin\Resources\EvaluasiKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvaluasiKesehatan extends EditRecord
{
    protected static string $resource = EvaluasiKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
