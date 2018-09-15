<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhyWesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_wes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icon', 32);
            $table->string('name', 255);
            $table->string('link', 127)->nullable();
            $table->unsignedTinyInteger('pos')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('why_wes');
    }
}
