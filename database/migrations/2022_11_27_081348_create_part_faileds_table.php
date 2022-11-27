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
        Schema::create('part_faileds', function (Blueprint $table) {
            $table->id();
            $table->string('failed_part_code');
            $table->text('failed_part_desc');
            $table->string('failed_part_srno');
            $table->string('failed_part_batch');
            $table->string('failed_part_qty');
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
        Schema::dropIfExists('part_faileds');
    }
};
