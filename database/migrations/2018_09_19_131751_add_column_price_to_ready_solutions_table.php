<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPriceToReadySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ready_solutions', function (Blueprint $table) {
            $table->unsignedMediumInteger('price')->after('alias')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ready_solutions', function (Blueprint $table) {
            $table->dropColumn(['price']);
        });
    }
}
