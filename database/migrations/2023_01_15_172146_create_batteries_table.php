<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batteries', function (Blueprint $table) {
            $table->id();
            $table->string('l_input')->nullable();
            $table->string('n_input')->nullable();
            $table->string('e_input')->nullable();
            $table->string('l_output')->nullable();
            $table->string('e_output')->nullable();
            $table->string('c_current')->nullable();
            $table->string('d_current')->nullable();
            $table->string('input_l_n')->nullable();
            $table->string('input_e_n')->nullable();
            $table->string('output_l_n')->nullable();
            $table->string('output_e_n')->nullable();
            $table->string('charge_voltage')->nullable();
            $table->string('discharge_5')->nullable();
            $table->string('i_freq')->nullable();
            $table->string('o_freq')->nullable();
            $table->string('error_code')->nullable();
            $table->string('load_percent')->nullable();
            $table->text('fault')->nullable();
            $table->string('battery_make')->nullable();
            $table->string('battery_model')->nullable();
            $table->string('battery_ah')->nullable();
            $table->string('battery_bank_no')->nullable();
            $table->string('ambient_temp')->nullable();
            $table->string('battery_pos')->nullable();
            $table->string('battery_batch_code')->nullable();
            $table->string('battery_serial')->nullable();
            $table->string('battery_volt')->nullable();
            $table->string('voltage_after2')->nullable();
            $table->string('voltage_after5')->nullable();
            $table->string('voltage_after10')->nullable();
            $table->string('voltage_after20')->nullable();
            $table->string('battery_cutoff')->nullable();
            $table->string('battery_status')->nullable();
            $table->string('total_voltage')->nullable();
            $table->string('current')->nullable();
            $table->string('connected_load')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batteries');
    }
};
