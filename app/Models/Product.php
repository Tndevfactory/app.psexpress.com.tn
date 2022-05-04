<?php

namespace App\Models;

use App\Models\User;
use App\Models\Photo;
use App\Models\Stock;
use App\Models\Category;
use App\Models\Substock;
use App\Models\Wishlist;
use App\Models\Subcategory;
use App\Models\Ratingproduct;
use App\Models\Commentproduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fr_product_ref',
        'en_product_ref',
        'ar_product_ref',

        'product_slug',
        'product_sku',

        'fr_description',
        'en_description',
        'ar_description',

        'price',
        'discount',


        'status',

        'seuil0',
        'price_seuil0',

        'seuil1',
        'price_seuil1',

        'seuil2',
        'price_seuil2',
       

        'photo1',
        'photo2',
        'photo3',

        'color',
        'weight',
        'dimension',
        'brand',
      
        'flash_sale',
       'day_deal',

        'tax',
        'fee',
        
        'shop_id',
        'substock_id',
        'stock_id'
     


    ];

   

  
   public function stock(){

       return $this->belongsTo(Stock::class);
   }
   public function substock(){

       return $this->belongsTo(Substock::class);
   }

//    public function images(){
//     return $this->hasMany(Photo::class);
//     }

//    public function ratingproducts(){
//     return $this->hasMany(Ratingproduct::class);
//     }
//    public function commentproducts(){
//     return $this->hasMany(Commentproduct::class);
//     }

//     public function wishlists(){
//         return $this->hasMany(Wishlist::class);
//         }

}
