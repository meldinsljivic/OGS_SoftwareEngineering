<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image1', 'image2', 'image3', 'youtube', 'category_id', 'title', 'description', 'price'];
}
