<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class OrderItem extends Model
{
    /** @use HasFactory<\Database\Factories\OrderItemFactory> */
    use HasFactory;


    function order()
    {
        return $this->belongsTo(Order::class);
    }

     function product()
    {
        return $this->belongsTo(Product::class);
    }

}
