<?php

use App\Models\MediaCollection;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->string('path');

            $table->string('nameOriginal')->nullable();

            $table->unsignedBigInteger('size')->nullable();

            $table->string('fileExtension')->nullable();

            $table->string('hashFile', 64)
//             Don't make it unique just clone model
                ->nullable();

            $table->foreignIdFor(Sku::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

//            name of the collection
            $table->string('collection')->nullable();

            $table->string('mime_type')->nullable();

            $table->string('disk')->default('public');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
