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
        Schema::table('products', function (Blueprint $table) {
            $table->integer('gender'); // champ 'sexe' avec 'int' pour type
            $table->string('origin'); // champ 'origin' avec 'string' pour type
            $table->string('shipping_time'); // champ 'shipping_time' pour le délai de livraison
            $table->text('text_product'); // champ 'text_product' avec 'text' pour type
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('origin');
            $table->dropColumn('shipping_time');
            $table->dropColumn('text_product');
        });
    }
};
