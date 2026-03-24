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
        Schema::create('articoli', function (Blueprint $table) {
            $table->id(); // Crea una chiave primaria auto-increment (ID)
            $table->string('titolo'); // Colonna VARCHAR
            $table->text('contenuto'); // Colonna TEXT
            $table->boolean('pubblicato')->default(false); // Colonna BOOLEAN
            $table->timestamps(); // Magia: crea in automatico 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articoli');
    }
};
