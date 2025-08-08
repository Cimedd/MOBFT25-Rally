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
        Schema::create('subkelompoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelompoks_id');
            $table->timestamps();

            $table->foreign('kelompoks_id')->references('id')->on('kelompoks')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subkelompoks');
    }
};
