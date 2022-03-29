<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStore extends Model
{
    use HasFactory;
    public function address(){
        return $this->belongsTo(Address::class);
    }
    public function itemfoods()
    {
        return $this->belongsToMany(Itemfood::class,'item_order', 'orderstore_id','itemfood_id');
    }
}
