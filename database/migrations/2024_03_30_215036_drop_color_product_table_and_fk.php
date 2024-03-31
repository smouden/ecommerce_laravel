<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Pas besoin de supprimer les clés étrangères ici car elles seront supprimées avec la table pivot
        Schema::dropIfExists('color_product');
        Schema::dropIfExists('colors');
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Recréer la table 'colors'
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name_color', 20);
            $table->timestamps();
        });

        // Recréer la table pivot 'color_product'
        Schema::create('color_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('color_id')->constrained('colors')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
