<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\record_data;
use App\Traits\GraphTraits;
use Illuminate\Support\Facades\Log;

class Dashboard extends Component
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
        return view('livewire.dashboard')
        ->extends('layouts.app')->section('content');
    }
}
