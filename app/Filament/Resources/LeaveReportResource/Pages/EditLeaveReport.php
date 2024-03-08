<?php

namespace App\Filament\Resources\LeaveReportResource\Pages;

use App\Filament\Resources\LeaveReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeaveReport extends EditRecord
{
    protected static string $resource = LeaveReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
