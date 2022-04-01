<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['order_date','restaurant_id','mobile','order_type','delivery_status','payment_status',
    'channel','item_total','sub_total','delivery_fee','tax','discount','grand_total','customer_id','address_id'];
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function address(){
        return $this->belongsTo(Address::class);
    }
    public function itemfoods()
    {
        return $this->belongsToMany(Itemfood::class,'itemfood_order', 'order_id','itemfood_id');
    }
}
