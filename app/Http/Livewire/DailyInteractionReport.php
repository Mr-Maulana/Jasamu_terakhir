<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DailyReport;
use App\Models\Service; // Import model Service
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class DailyInteractionReport extends Component
{
    public function render()
    {
        $dailyReports = DailyReport::all();
        $services = Service::all();
        $chart = (new ColumnChartModel())
            ->setTitle('Data Kunjungan');

        foreach ($services as $service) {
            $interactions = $dailyReports->where('service_id', $service->id)->sum('interactions');
            $chart->addColumn($service->name, $interactions, '#' . substr(md5(rand()), 0, 6));
        }

        return view('livewire.daily-interaction-report', compact('chart', 'dailyReports'));
    }
}
