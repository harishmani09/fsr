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
        Schema::table('part_replacements', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable()->after('id');
            $table->unsignedBigInteger('product_id')->nullable()->after('id');
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('part_replacements', function (Blueprint $table) {
            $table->dropColumn('customer_id');
            $table->dropColumn('product_id');
            $table->dropColumn('user_id');
        });
    }
};
