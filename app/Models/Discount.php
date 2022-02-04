<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable=['name','code','discout_type','amount','min_percentage_amount','start_at','end_at','max_uses','max_uses_per_customer'];
    public function restaurants(){
        return $this->belongsToMany(Restaurant::class,'discount_restaurants');
    }
    
}
