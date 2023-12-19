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
            $table->string('skuStatus')
                ->default(SkuStatus::StockProcessing);
            $table->string('skucode');
            $table->string('barcode');
            $table->decimal('cost', 8, 3)
                ->comment('the cost is a price from supplier ');

            $table->decimal('price', 8, 3)
                ->comment('price for customer');

//
            $table->integer('quantityInStock');
            $table->string('locationInStock');


            $table->foreignIdFor(Product::class)
                ->constrained();

            $table->foreignIdFor(Stock::class)
                ->constrained();

            $table->foreignIdFor(Unit::class)
                ->nullable();

            $table->foreignIdFor(Vendor::class);


            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::statement('ALTER TABLE skus ADD COLUMN stockValue DECIMAL (12,2)
 GENERATED ALWAYS AS (price*quantityInStock) STORED;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
