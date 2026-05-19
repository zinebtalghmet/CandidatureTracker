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
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidature_id')
                  ->constrained('candidatures')
                  ->cascadeOnDelete();
            $table->enum('type', ['telephone', 'technique', 'rh', 'final']);
            $table->dateTime('date_heure');
            $table->text('notes_preparation')->nullable();
            $table->enum('resultat', ['en_attente', 'reussi', 'echoue', 'annule'])
                  ->default('en_attente');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entretiens');
    }
};
