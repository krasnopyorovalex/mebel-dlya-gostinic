<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadySolutionProductRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rs_product_relatives', function (Blueprint $table) {
            $table->unsignedInteger('rs_id');
            $table->unsignedInteger('product_id');

            $table->primary(['rs_id', 'product_id']);

            $table->foreign('rs_id')->references('id')->on('ready_solutions')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('catalog_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rs_product_relatives');
    }
}
