<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable=['name','about','address','mobile','city_id','location','min_order_value',
    'cost_for_two_people','default_preparation_time','is_open','allow_pickup','logo','banner'];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function cuisines(){
        return $this->belongsToMany(Cuisine::class,'cuisine_restaurant');
    }
    
    public function discounts(){
        return $this->hasMany(Discount::class);
    } 
    public function orders(){
        return $this->hasMany(Order::class);
    }   
    public function getLogoAttribute($value) {

        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
        
        return $value;
        
        }
        
        return asset('storage/' . $value);
        
        }//display image

        public function getBannerAttribute($value) {

            if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            
            return $value;
            
            }
            
            return asset('storage/' . $value);
            
            }//display image

            public function itemfoods(){
                return $this->belongsToMany(Itemfood::class,'itemfood_restaurants','restaurant_id','itemfood_id');
            }
            public function modifiers(){
                return $this->belongsToMany(Modifier::class,'itemfood_modifier');
            }
}
