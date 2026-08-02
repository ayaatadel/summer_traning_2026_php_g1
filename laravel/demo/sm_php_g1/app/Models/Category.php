<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;
use App\Models\Product;

class Category extends Model
{
     use HasFactory;
    //
protected $fillable = ["name", "description"]; // user can store data in it
// protected $guarded = ["id"]; // user cannot store data in it


    function orders()
    {
        return $this->hasMany(Order::class);
    }

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
