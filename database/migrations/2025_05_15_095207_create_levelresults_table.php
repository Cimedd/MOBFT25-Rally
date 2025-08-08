<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('levelresults', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gamesessions_id');
            $table->unsignedBigInteger('levels_id');
            $table->unsignedBigInteger('subkelompoks_id_1');
            $table->unsignedBigInteger('subkelompoks_id_2');
            $table->unsignedBigInteger('subkelompoks_id_menang');
            $table->timestamps();

            $table->foreign('gamesessions_id')->references('id')->on('gamesessions');
            $table->foreign('levels_id')->references('id')->on('levels');
            $table->foreign('subkelompoks_id_1')->references('id')->on('subkelompoks');
            $table->foreign('subkelompoks_id_2')->references('id')->on('subkelompoks');
            $table->foreign('subkelompoks_id_menang')->references('id')->on('subkelompoks');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levelresults');
    }
};
