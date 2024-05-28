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
        DB::unprepared('
            CREATE TRIGGER update_stock_after_order
            AFTER INSERT ON order_items
            FOR EACH ROW
            BEGIN
                CALL update_stock(NEW.product_id, NEW.quantity_product_comanded);
                
                DELETE FROM products WHERE id = NEW.product_id AND stock_quantity <= 0;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_stock_after_order');
    }
};
