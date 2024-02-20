<?php

use App\enums\SkuStatus;
use App\Models\Package;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Unit;
use App\Models\Vendor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skus', function (Blueprint $table) {
            $table->id();

            $table->decimal('number_in_stock', 8, 3);
//'skucode' consists of : vendor name 4, name(product) 6, category_id 3

            $table->string('skucode');

            $table->string('barcode', 32)
                ->unique();

            $table->decimal('cost', 8, 3)
                ->comment('the cost is a price from supplier ');

            $table->decimal('price', 8, 3)
                ->comment('price for customer');

//
            $table->string('location_in_stock')
                ->unique();


            $table->foreignIdFor(Product::class)
                ->constrained();

            $table->foreignIdFor(Stock::class)
                ->constrained();

            $table->softDeletes();


            $table->timestamps();
        });

//        \Illuminate\Support\Facades\DB::statement('ALTER TABLE skus ADD COLUMN stockValue DECIMAL (12,2)
// GENERATED ALWAYS AS (price*quantity_in_stock) STORED;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
