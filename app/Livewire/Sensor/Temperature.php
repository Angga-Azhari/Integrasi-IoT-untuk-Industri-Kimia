<?php

namespace App\Livewire\Sensor;

use App\Models\record_data;
use Livewire\Component;
use App\Traits\GraphTraits;

class Temperature extends Component
{
    use GraphTraits;

    public $LastData;

    public function refreshdata(){
        $this->LastData = record_data::latest()->first();

        $GrapData = record_data::latest()->take(200)->get();

        $formattedData = $this->plotGraph($GrapData);

        $this->dispatch('refreshData', ['data' => $formattedData]);
    }
    public function mount(){
        $this->refreshdata();
    }
    public function render()
    {
        return view('livewire.sensor.temperature')
        ->extends('layouts.app')->section('content');
    }
}
