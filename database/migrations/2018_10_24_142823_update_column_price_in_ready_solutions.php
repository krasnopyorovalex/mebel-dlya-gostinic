<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnPriceInReadySolutions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ready_solutions', function (Blueprint $table) {
            $table->dropColumn('price');
        });
        Schema::table('ready_solutions', function (Blueprint $table) {
            $table->string('price', 127)->nullable()->after('alias');
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
            $table->dropColumn('price');
        });
        Schema::table('ready_solutions', function (Blueprint $table) {
            $table->unsignedMediumInteger('price')->after('alias')->default(0);
        });
    }
}
