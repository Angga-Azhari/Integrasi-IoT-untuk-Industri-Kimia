<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Dashboard::class)->name('dashboard');
Route::get('/mq135', \App\Livewire\Sensor\MQ135::class)->name('MQ135');
Route::get('/Temperature', \App\Livewire\Sensor\Temperature::class)->name('Temperature');
Route::get('/Turbidity', \App\Livewire\Sensor\Turbidity::class)->name('Turbidity');
Route::get('/PHMeter', \App\Livewire\Sensor\PHmeter::class)->name('PHMeter');
Route::get('/TDS', \App\Livewire\Sensor\TDS::class)->name('TDS');

