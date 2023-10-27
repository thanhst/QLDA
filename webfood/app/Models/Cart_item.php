<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    use HasFactory;
    public function foods()
    {
        return $this->belongsTo(Food::class, "idFood", 'idFood');
    }
    public function carts()
    {
        return $this->belongsTo(Cart::class, 'idCart', 'idCart');
    }
    protected $fillable = [
        "idCart",
        "idFood",
        "postCode",
        "subTotal",
        "shipping",
        "total"
    ];
}
