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
        DB::unprepared('
            CREATE PROCEDURE update_stock(IN product_id INT, IN quantity_ordered INT)
            BEGIN
                UPDATE products
                SET stock_quantity = stock_quantity - quantity_ordered
                WHERE id = product_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS update_stock');
    }
};
