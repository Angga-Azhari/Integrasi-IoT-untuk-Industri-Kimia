<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('config_datas', function (Blueprint $table) {
            $table->id();
            $table->float('Relay')->default(0);
            $table->float('alarm')->default(0);
            $table->float('solenoid')->default(0);
            $table->float('lamp')->default(0);
            $table->float('pump')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_datas');
    }
};
