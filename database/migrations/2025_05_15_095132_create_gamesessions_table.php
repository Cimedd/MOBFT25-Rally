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
        Schema::create('gamesessions', function (Blueprint $table) {
            $table->id();
            $table->timestamp('waktu_mulai')->nullable();
            $table->timestamp('waktu_selesai')->nullable();

            $table->unsignedBigInteger('kelompoks_id_1');
            $table->unsignedBigInteger('kelompoks_id_2');
            $table->unsignedBigInteger('kelompoks_id_menang');
            $table->timestamps();

            $table->foreign('kelompoks_id_1')->references('id')->on('kelompoks');
            $table->foreign('kelompoks_id_2')->references('id')->on('kelompoks');
            $table->foreign('kelompoks_id_menang')->references('id')->on('kelompoks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gamesessions');
    }
};
