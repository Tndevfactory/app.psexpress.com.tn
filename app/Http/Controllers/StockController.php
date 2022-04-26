<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function showCategories(){
        return view('categories.categories');
    }


    public function apiAllStocks(Product $product){

        $products= Stock::get();
    
        $data = [
    
            "backend_response" => 'get products',
            "products" => $products,
            "response_code" => 200,
    
            ];
              return response()->json($data,200);
    
       }

    public function apiCreateStock(Request $request){

        $validatedData = $request->validate([

         'photo1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

         ]);

    if($request->hasFile('photo1')) { 

        $file = $request->file('photo1');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/photos' ;
        $file->move($destinationPath,$fileName);
        $path1 = '/media/photos/'.$fileName;
    }

    
   
    $new_stock=[
        'fr_stock_name' => $request->fr_product_ref,
        'en_stock_name' => $request->en_product_ref,
        'ar_stock_name'  => $request->ar_product_ref,

        'stock_slug' => Str::slug($request->en_product_ref, '-'),
       
        'stock_photo' =>$path1 ?? '',
        'icon' =>$path1 ?? '',
     
    ];

        $output= Stock::create($new_product);

        $data = [

            "backend_response" => 'create new product',
            "photo" =>  $output,
            "response_code" => 200,
          ];

        return response()->json($data,200);

   }
}
