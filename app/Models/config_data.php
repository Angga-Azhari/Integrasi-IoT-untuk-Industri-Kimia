<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config_data extends Model
{
    use HasFactory;
    protected $table = 'config_datas';
    protected $fillable = ['Relay', 'alarm', 'solenoid', 'buzzer', 'pump'];

}
