<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'url',
        'description',
        'price',
        'content',
        'image',
        
    ];

    public function getImage(){
        return "$this->image";
    }
}
