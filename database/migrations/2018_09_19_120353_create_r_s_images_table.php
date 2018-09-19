<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRSImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_s_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rs_id');
            $table->string('name', 255)->nullable();
            $table->string('alt', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->char('basename', 40);
            $table->string('ext', 5);
            $table->enum('is_published', [0,1])->default(1);
            $table->unsignedSmallInteger('pos')->default(0);

            $table->index(['rs_id']);
            $table->foreign('rs_id')->references('id')->on('ready_solutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_s_images');
    }
}
