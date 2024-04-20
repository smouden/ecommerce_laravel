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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->string('title_product_ordered'); // Titre du produit au moment de la commande
            $table->decimal('price_product_ordered', 8, 2); // Prix du produit au moment de la commande
            $table->string('picture_product_ordered'); // Image du produit au moment de la commande
            $table->integer('quantity_product_comanded'); // Quantité du produit commandée
            $table->decimal('total_price_product_commanded', 8, 2); // Total du prix du produit commandé
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
