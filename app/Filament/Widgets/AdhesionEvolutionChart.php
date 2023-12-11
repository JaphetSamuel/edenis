<?php

namespace App\Filament\Widgets;

use App\Models\Adhesion;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;

class AdhesionEvolutionChart extends LineChartWidget
{
    protected function getHeading(): ?string
    {
        return "évolution des adhesions";
    }

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = Trend::model(Adhesion::class)
            ->between(
                start: now()->startOfMonth(),end: now()->endOfMonth()
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Adehsions',
                    'borderColor'=> '#36A2EB',
                    'data' => $data->map(fn ( $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn ( $value) => $value->date),
        ];
    }
}