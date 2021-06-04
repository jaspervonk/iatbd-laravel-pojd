<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign("huisdier_eigenaar")->references("id")->on("users");
            $table->foreign("huisdier_soort")->references("soort")->on("soorten_huisdieren");
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
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign("huisdier_eigenaar");
            $table->dropForeign("huisdier_soort");
            $table->dropForeign("oppas");
        });
    }
}
