<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['location','house_name','area','city','landmark','pincode','home','note_a_driver','default'];
    use HasFactory;
    public function orders(){
        return $this->hasMany(Order::class);
    }   
}
