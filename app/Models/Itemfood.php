<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemfood extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_item', 'image', 'description','status','type','name', 'rate','restaurant_id',
    ];
    public function restaurants(){
        return $this->hasMany(Restaurant::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'itemfood_order');
    }
}
