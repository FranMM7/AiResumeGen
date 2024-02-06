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
        Schema::create('tools_skills', function (Blueprint $table) {
            $table->id('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('tool_skill_name');
            $table->enum('type', ['A', 'B']);
            $table->unsignedBigInteger('related_title_employment')->nullable();
            $table->foreign('related_title_employment')->references('id')->on('titles_certificates')->onDelete('set null');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools_skills');
    }
};
