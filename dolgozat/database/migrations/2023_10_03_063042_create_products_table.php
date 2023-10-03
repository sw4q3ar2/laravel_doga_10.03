<?php

use App\Models\Products;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('type_id')->references('type_id')->on('product_types');
            $table->date('date');
            $table->timestamps();
        }); 

        Products::create([
            'item_id' => 1, 
            'type_id' => 1, 
            'date' => '2023-03-11', 
        ]);

        Products::create([
            'item_id' => 2, 
            'type_id' => 2, 
            'date' => '2023-03-11', 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
