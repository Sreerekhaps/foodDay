<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable=['name','about','address','mobile','location','minimum_order_value',
    'cost_for_two_people','default_preparation_time','is_open','allow_pickup'];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function cuisine(){
        return $this->belongsTo(Cuisine::class);
    }
    public function getPostImageAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
        }
        public function discounts(){
            return $this->belongsTo(Discount::class);
        }    
   
}
