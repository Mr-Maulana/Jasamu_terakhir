<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MonthlyReport;

class MonthlyInteractionReport extends Component
{
    public function render()
    {
        $reports = MonthlyReport::all();

        return view('livewire.monthly-interaction-report', compact('reports'));
    }
}

