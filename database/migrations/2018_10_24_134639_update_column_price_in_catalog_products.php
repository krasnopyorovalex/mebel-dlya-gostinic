<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnPriceInCatalogProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catalog_products', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        Schema::table('catalog_products', function (Blueprint $table) {
            $table->string('price', 127)->nullable()->after('catalog_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catalog_products', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        Schema::table('catalog_products', function (Blueprint $table) {
            $table->unsignedMediumInteger('price')->after('catalog_id')->default(0);
        });
    }
}
