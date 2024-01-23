<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
//    php artisan   make:migration order_sku --create order_sku
    public function up(): void
    {
        Schema::create('order_sku', function (Blueprint $table) {
            $table->primary(['sku_id', 'order_id']);
//
            $table->integer('number_in_order');

            $table->foreignIdFor(Sku::class);
            $table->foreignIdFor(Order::class);

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_product', function (Blueprint $table) {
            //
        });
    }
};
