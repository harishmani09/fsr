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
        Schema::create('sign_offs', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->unsignedBigInteger('mobile_no');
            $table->string('customer_designation');
            $table->string('customer_signature');
            $table->string('engineer_name');
            $table->string('engineer_signature');
            $table->timestamp('signoff_date');
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
        Schema::dropIfExists('sign_offs');
    }
};
