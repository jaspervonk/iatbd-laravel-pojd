<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToAanvragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aanvragen', function (Blueprint $table) {
            $table->foreign("huisdier_eigenaar")->references("id")->on("users");
            $table->foreign("huisdier")->references("id")->on("huisdieren");
            $table->foreign("oppas")->references("id")->on("oppassers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aanvragen', function (Blueprint $table) {
            $table->dropForeign("aanvragen_huisdier_eigenaar_foreign");
            $table->dropForeign("aanvragen_huisdier_foreign");
            $table->dropForeign("aanvragen_oppas_foreign");
        });
    }
}
