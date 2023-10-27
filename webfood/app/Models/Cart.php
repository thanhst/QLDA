<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey="idCart";
    protected $fillable=[
        'idUser',
    ];
    public function hasItem()
    {
        return $this->hasMany(Cart_item::class,"idCart","idCart");
    }
}
