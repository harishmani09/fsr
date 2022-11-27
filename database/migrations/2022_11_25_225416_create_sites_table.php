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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('ac_provided');
            $table->string('ac_working');
            $table->string('dg_details');
            $table->unsignedBigInteger('kva');
            $table->string('dust_level');
            $table->string('elec_phase');
            $table->unsignedBigInteger('neutral_volt');
            $table->unsignedBigInteger('load_v');
            $table->string('load_type');
            $table->string('ups');
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
        Schema::dropIfExists('sites');
    }
};
