<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Service;
use Livewire\Component;
use App\Models\YearlyReport;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class YearlyInteractionReport extends Component
{

    public function render()
    {
        $currentYear = Carbon::now()->year;
        $yearlyReport = YearlyReport::where('year', $currentYear)->get();
        $services = Service::all();

        $chart = (new ColumnChartModel())
            ->setTitle('Data Kunjungan Tahunan - ' . $currentYear);

        foreach ($services as $service) {
            $interactions = $yearlyReport->where('service_id', $service->id)->sum('interactions');
            $chart->addColumn($service->name, $interactions, '#' . substr(md5(rand()), 0, 6));
        }

        return view('livewire.yearly-interaction-report', compact('chart'));
    }
}
