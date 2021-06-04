<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeySoortToHuisdierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->foreign("soort")->references("soort")->on("soorten_huisdieren");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->dropForeign("huisdieren_soort_foreign");
        });
    }
}
