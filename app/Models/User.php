<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Permission;
use App\Models\Ratingproduct;
use App\Models\Commentproduct;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'retailer_name',
        'role',
        'email',
        'address',
        'phone1',
        'phone2',
        'dob',
        'genre',
        'user_image',
        'active',
        'shipment_address',
        'email_verified_at',
        'technical_details',
        'city',
        'fb_user_id',
        'mac_address',
        'password',
        'remember_token',
       
        
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }


    public function ratingproducts(){
        return $this->hasMany(Ratingproduct::class);
    }

    public function commentproducts(){
        return $this->hasMany(Commentproduct::class);
    }
    
}
