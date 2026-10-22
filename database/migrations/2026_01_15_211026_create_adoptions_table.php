<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('adoptions', function (Blueprint $table) {
        $table->id();
        $table->string('imie_zwierzecia');
        $table->string('czy_posiada_zwierzeta');
        $table->string('jakie_zwierzeta')->nullable();
        $table->string('email');
        $table->string('telefon');
        $table->text('o_sobie'); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
