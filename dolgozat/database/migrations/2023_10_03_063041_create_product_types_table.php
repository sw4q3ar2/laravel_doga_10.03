<?php

use App\Models\Product_types;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('description');
            $table->string('cost');
            $table->timestamps();
        });

        Product_types::create([
            'type_id' => 1, 
            'name' => 1, 
            'description' => 'finom sutemeny',
            'cost' => '1000', 
        ]);

        Product_types::create([
            'type_id' => 2, 
            'name' => 2, 
            'description' => 'sajtos keksz',
            'cost' => '5000', 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
