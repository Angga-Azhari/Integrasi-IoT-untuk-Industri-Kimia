<?php

namespace App\Livewire\Sensor;

use App\Models\record_data;
use Livewire\Component;
use App\Traits\GraphTraits;

class TDS extends Component
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
        return view('livewire.sensor.t-d-s')
        ->extends('layouts.app')->section('content');
    }
}
