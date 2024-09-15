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
        Schema::create('declarations', function (Blueprint $table) {
            $table->id();
            $table->string('nomProprietaire');
            $table->string('prenomProprietaire');
            $table->string('typePiece');
            $table->string('lieu');
            $table->string('email')->unique();
            $table->string('structureDeclarer');
            $table->string('etat')->default(1);//par defaut 1:trouver -1:perdue 0:rendue
            $table->dateTime('date_declarer')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('date_ramassage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declarations');
    }
};
