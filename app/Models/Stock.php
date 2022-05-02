<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

       
        'id',
        'stock_slug',

        'fr_stock_name',
        'en_stock_name',
        'ar_stock_name',

       'stock_photo',
        'icon',

    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
