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
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('product_model', 'product_name');
            $table->renameColumn('product_rating', 'product_category');
            $table->renameColumn('product_serial', 'product_model');
            $table->renameColumn('product_part', 'product_capacity');
            $table->renameColumn('ctd_number', 'product_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('product_name', 'product_model');
            $table->renameColumn('product_category', 'product_rating');
            $table->renameColumn('product_model', 'product_serial');
            $table->renameColumn('product_capacity', 'product_part');
            $table->renameColumn('product_status', 'ctd_number');
        });
    }
};
