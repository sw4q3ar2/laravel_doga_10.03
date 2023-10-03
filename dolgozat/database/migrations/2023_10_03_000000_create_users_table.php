<?php

use App\Models\Users;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('balance');
            $table->timestamps();
        });

        Users::create([
            'id' => 1, 
            'name' => 'Kis Peti', 
            'email' => 'kp123@gmail.com', 
            'balance' => '5000', 
            'password'=>'kp_123'
        ]);

        Users::create([
            'id' => 1, 
            'name' => 'Nagy Feri', 
            'email' => 'nf321@gmail.com',
            'balance' => '15000', 
            'password'=>'kp_123'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
