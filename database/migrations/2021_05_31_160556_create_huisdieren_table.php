<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdieren', function (Blueprint $table) {
            $table->id();
            $table->string("image")->default("img/huisdier_default.png");
            $table->string('naam');
            $table->string('soort');
            $table->date('oppasdatum');
            $table->integer('aantal_dagen');
            $table->float('dagtarief', 10, 2);
            $table->text('beschrijving')->nullable();
            $table->string('status')->default('beschikbaar');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huisdieren');
    }
}
