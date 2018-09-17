<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogProductTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_product_tabs', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('tab_id');

            $table->primary(['product_id', 'tab_id']);

            $table->foreign('product_id')->references('id')->on('catalog_products')->onDelete('cascade');
            $table->foreign('tab_id')->references('id')->on('tabs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_product_tabs');
    }
}
