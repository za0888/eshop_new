<?php

use App\Models\Category;
use App\Models\Order;
use App\Models\Stock;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();

            $table->foreignIdFor(Category::class)
                ->constrained();

            $table->timestamps();
            $table->softDeletes();

//            products is stocked or in the stockk  or with the user/manager
            /*$table->integer('stockable_id');
            $table->string('stockable_type');*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
