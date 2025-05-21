<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Service;

class ServiceStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
         return [
            Stat::make('सेवाको संख्या', Service::count())
                ->description('हाल उपलब्ध सेवा')
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('primary'),
        ];
    }
    
}
