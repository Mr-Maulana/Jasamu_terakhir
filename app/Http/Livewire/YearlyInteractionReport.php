<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\YearlyReport;

class YearlyInteractionReport extends Component
{
    public function render()
    {
        $reports = YearlyReport::all();

        return view('livewire.yearly-interaction-report', compact('reports'));
    }
}

