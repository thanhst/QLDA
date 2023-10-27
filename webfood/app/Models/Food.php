<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table="foods";
    protected $primaryKey='idFood';
    public function hasItem(){
        return $this->hasMany(Cart_item::class,"idCart","idCart");
    }
    protected $fillable=[
        "nameFood",
        "priceFood",
        "describe",
        "imgFood",
    ];
}
