<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function sellerAgreement(){
        return view('seller.seller_agreement');
    }
    
    public function sellerProfile(){
        return view('seller.seller_profile');
    }
}
