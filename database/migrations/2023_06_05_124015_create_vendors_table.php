<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->storedAs("SUBSTRING(name,1,5)");
//            $table->string('slug')->storedAs("SUBSTRING(name, 0, 3)");
            $table->string('account');
            $table->string('address');
            $table->string('country')
                ->default('Ukraine');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
