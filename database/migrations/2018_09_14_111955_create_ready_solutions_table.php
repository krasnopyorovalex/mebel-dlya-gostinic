<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ready_solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 512);
            $table->string('name_image', 255)->nullable();
            $table->string('title', 512);
            $table->string('description', 512)->nullable();
            $table->string('keywords', 512)->nullable();
            $table->text('text');
            $table->string('alias', 255)->unique();
            $table->enum('in_main',[0,1])->default(1);
            $table->enum('is_published',[0,1])->default(1);
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
        Schema::dropIfExists('ready_solutions');
    }
}
