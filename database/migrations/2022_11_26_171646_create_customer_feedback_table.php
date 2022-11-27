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
        Schema::create('customer_feedback', function (Blueprint $table) {
            $table->id();

            $table->string('product_perf');
            $table->string('service_quality');
            $table->string('call_logging');
            $table->string('engineer_quality');
            $table->string('overall_quality');
            $table->text('problem_desc');
            $table->text('action_taken');
            $table->text('general_feedback');
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
        Schema::dropIfExists('customer_feedback');
    }
};
