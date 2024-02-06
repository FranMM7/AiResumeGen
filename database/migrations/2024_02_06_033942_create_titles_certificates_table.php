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
        Schema::create('titles_certificates', function (Blueprint $table) {
            $table->id();  // Añade esta línea para crear la columna 'id'
            $table->string('institution_name');
            $table->string('title_name');
            $table->string('study_period')->nullable();
            $table->string('document_attachment')->nullable();
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titles_certificates');
    }
};
