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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->string('call_number');
            $table->date('job_start');
            $table->timestamp('job_starttime');
            $table->date('job_end');
            $table->timestamp('job_endtime');
            $table->unsignedDouble('travel_time');
            $table->string('call_status');
            $table->string('engineer_name');
            $table->text('complaint_details');
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
        Schema::dropIfExists('calls');
    }
};
