<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemfood extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_item', 'image', 'description','status','type','name', 'rate'
    ];
    public function restaurants(){
        return $this->hasMany(Restaurant::class);
    }
    public function orderstores()
    {
        return $this->belongsToMany(OrederStore::class, 'item_order');
    }
}
