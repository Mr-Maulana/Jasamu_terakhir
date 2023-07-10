<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDetail extends Component
{
    public $serviceId;

    public function mount($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function render()
    {
        $service = Service::findOrFail($this->serviceId);
        return view('livewire.service-detail', compact('service'));
    }
}
