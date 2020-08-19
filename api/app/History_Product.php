<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History_Product extends Model
{
    protected $fillable = 
    ['history_id',
    'product_id',
    'cantidad'
];
    
}
