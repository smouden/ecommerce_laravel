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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); // Ajoute directement la colonne user_id
            $table->foreign('user_id')->references('id')->on('users'); // Déclare la clé étrangère
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Supprime la contrainte de clé étrangère
            $table->dropColumn('user_id'); // Supprime la colonne user_id
        });
    }
};
