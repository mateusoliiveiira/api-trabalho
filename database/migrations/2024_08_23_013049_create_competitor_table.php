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
        Schema::create('competitor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('height');
            $table->string('weight');
            $table->string('sex');
            $table->string('cpf');
            $table->string('rg');
            $table->string('team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitor');
    }
};
