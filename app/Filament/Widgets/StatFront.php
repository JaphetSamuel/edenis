<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Adhesion;

class StatFront extends BaseWidget
{
    protected $columns = 4;
    
    protected function getCards(): array
    {
        $nombreAdhesion = Adhesion::query()->get()->count();
        
        return [
            Card::make("Nombre d'adhesion", $nombreAdhesion)
            
        ];
    }
}
