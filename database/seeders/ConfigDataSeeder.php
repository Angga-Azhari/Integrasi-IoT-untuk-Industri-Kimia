<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('config_datas')->insert([
            [
                'Relay' => 1.0,
                'alarm' => 1.0,
                'solenoid' => 1.0,
                'lamp' => 1.0,
                'pump' => 1.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
