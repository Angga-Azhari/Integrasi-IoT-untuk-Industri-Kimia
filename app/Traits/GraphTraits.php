<?php

namespace App\Traits;

use Carbon\Carbon;

trait GraphTraits{
    public function plotGraph($data){
        $dataX  = [];
        $data1 = $data->pluck('mq135')->toArray();
        $data2 = $data->pluck('temperature')->toArray();
        $data3 = $data->pluck('turbidity')->toArray();
        $data4 = $data->pluck('TDS')->toArray();
        $data5 = $data->pluck('pH')->toArray();


        foreach ($data as $value){
            $dataX[] = Carbon::make($value->created_at)->format('H:i:s');
        }

        return [
            'data_1' => array_reverse(array_map('floatval', $data1)),
            'data_2' => array_reverse(array_map('floatval', $data2)),
            'data_3' => array_reverse(array_map('floatval', $data3)),
            'data_4' => array_reverse(array_map('floatval', $data4)),
            'data_5' => array_reverse(array_map('floatval', $data5)),
            'data_x' => array_reverse($dataX),
        ];
    }
}
