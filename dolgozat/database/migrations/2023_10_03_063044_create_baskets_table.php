<?php

use App\Models\Baskets;
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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id('basket_id');
            $table->foreignId('item_id')->references('item_id')->on('products');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Baskets::create([
            'basket_id' => 1, 
            'item_id' => 1, 
            'user_id' => 1, 
        ]);

        Baskets::create([
            'basket_id' => 2, 
            'item_id' => 2, 
            'user_id' => 2, 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
