<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function stock(){
        return $this->belongsTo(Stock::class);
    }
}
