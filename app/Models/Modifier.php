<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modifier extends Model
{
    use HasFactory;
    public function modifieritem(){
        return $this->belongsTo(Modifieritem::class);
    }

    public function restaurants(){
        return $this->belongsToMany(Modifier::class,'itemfood_modifier','itemfood_id','modifier_id');
    }
}
