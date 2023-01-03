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
        Schema::table('sign_offs', function (Blueprint $table) {
            $table->dropColumn(['engineer_name', 'engineer_signature', 'signoff_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sign_offs', function (Blueprint $table) {
            $table->string('engineer_name');
            $table->string('engineer_signature');
            $table->timestamp('signoff_date');
        });
    }
};
