<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record_data extends Model
{
    use HasFactory;
    protected $table = 'record_datas';
    protected $fillable = ['mq-135','temperature','TDS','turbidity','pH'];
}
