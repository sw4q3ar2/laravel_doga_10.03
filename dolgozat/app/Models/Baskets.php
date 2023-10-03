<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    use HasFactory;

    protected  $primaryKey = 'basket_id';

    protected $fillable = [
        'item_id',
        'user_id',
    ];
}
