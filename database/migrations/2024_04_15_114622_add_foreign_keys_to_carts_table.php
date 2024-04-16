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
        Schema::table('carts', function (Blueprint $table) {
            // Assurez-vous que les colonnes pour les clés étrangères existent
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');

            // Ajouter les clés étrangères référençant les tables 'users' et 'products'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            // Supprimer les contraintes de clé étrangère d'abord
            $table->dropForeign(['user_id']);
            $table->dropForeign(['product_id']);

            // Ensuite, supprimer les colonnes
            $table->dropColumn(['user_id', 'product_id']);
        });
    }


};
