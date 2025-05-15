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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->integer('nrp')->primary(); // pakai integer custom PK
            $table->string('nama', 45)->nullable();
            $table->unsignedBigInteger('kelompoks_id');
            $table->timestamps();

            $table->foreign('kelompoks_id')->references('id')->on('kelompoks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
