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
        Schema::create('part_replacements', function (Blueprint $table) {
            $table->id();
            $table->string('part_code');
            $table->string('part_description');
            $table->string('part_srno');
            $table->string('part_batchcode');
            $table->string('part_quantity');
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
        Schema::dropIfExists('part_replacements');
    }
};
