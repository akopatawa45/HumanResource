<?php

namespace App\Filament\Resources\LeaveReportResource\Pages;

use App\Filament\Resources\LeaveReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeaveReports extends ListRecords
{
    protected static string $resource = LeaveReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
