<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'mass_id',
        'price',
        'weigth'
    
    ];
    

}
