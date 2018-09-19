<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadySolutionTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ready_solution_tabs', function (Blueprint $table) {
            $table->unsignedInteger('rs_id');
            $table->unsignedInteger('tab_id');
            $table->text('value');

            $table->primary(['rs_id', 'tab_id']);

            $table->foreign('rs_id')->references('id')->on('ready_solutions')->onDelete('cascade');
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
        Schema::dropIfExists('ready_solution_tabs');
    }
}
