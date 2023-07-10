<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DailyReport;

class DailyInteractionReport extends Component
{
    public $reports;

    public function mount()
    {
        $this->reports = DailyReport::all();
    }

    public function render()
    {
        return view('livewire.daily-interaction-report');
    }
}
