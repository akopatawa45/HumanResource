<?php

namespace App\Filament\Resources\LeaveReportResource\Pages;

use App\Filament\Resources\LeaveReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLeaveReport extends ViewRecord
{
    protected static string $resource = LeaveReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
