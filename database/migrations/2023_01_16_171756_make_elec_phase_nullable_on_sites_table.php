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
        Schema::table('sites', function (Blueprint $table) {
            $table->string('elec_phase')->nullable()->change();
            $table->unsignedBigInteger('neutral_volt')->nullable()->change();
            $table->unsignedBigInteger('load_v')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('elec_phase')->nullable(false)->change();
            $table->unsignedBigInteger('neutral_volt')->nullable(false)->change();
            $table->unsignedBigInteger('load_v')->nullable(false)->change();
        });
    }
};
