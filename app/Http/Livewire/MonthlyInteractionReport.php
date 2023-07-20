<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\MonthlyReport;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Carbon\Carbon;

class MonthlyInteractionReport extends Component
{
    public function render()
    {
        // Ambil data bulan dan tahun saat ini
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        // Ambil data MonthlyReport berdasarkan tahun dan bulan saat ini
        $monthlyReports = MonthlyReport::where('year', $currentYear)
            ->where('month', $currentMonth)
            ->get();

        $services = Service::all();
        $chart = (new ColumnChartModel())
            ->setTitle('Data Kunjungan Bulanan - ' . Carbon::now()->format('F Y'));

        foreach ($services as $service) {
            $interactions = $monthlyReports->where('service_id', $service->id)->sum('interactions');
            $chart->addColumn($service->name, $interactions, '#' . substr(md5(rand()), 0, 6));
        }

        return view('livewire.monthly-interaction-report', compact('chart', 'monthlyReports'));
    }
}
