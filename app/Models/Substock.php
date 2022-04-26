<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Substock extends Model
{
    use HasFactory;

    protected $fillable = [

       
       'fr_substock_name',
       'en_substock_name',
        'ar_substock_name',

        'substock_slug',
       
       'substock_photo',
        'icon',

        'stock_id',

    ];
}
