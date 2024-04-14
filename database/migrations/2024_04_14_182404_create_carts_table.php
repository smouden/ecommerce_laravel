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
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); 
            $table->string('picture_product_cart'); // VARCHAR avec une longueur maximale de 50
            $table->decimal('price_product_cart'); 
            $table->integer('quantity_product_cart'); // INT pour la quantité du produit
            $table->decimal('total_price_product'); // FLOAT pour le prix total
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
