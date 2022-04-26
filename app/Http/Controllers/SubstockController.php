<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubstockRequest;
use App\Http\Requests\UpdateSubstockRequest;
use App\Models\Substock;

class SubstockController extends Controller
{


    public function apiAllSubstocks(Product $product){

        $products= Substock::get();
    
        $data = [
    
            "backend_response" => 'get products',
            "products" => $products,
            "response_code" => 200,
    
            ];
              return response()->json($data,200);
    
       }

    public function apiCreateSubstock(Request $request){

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
           'fr_substock_name' => $request->fr_product_ref,
           'en_substock_name' => $request->en_product_ref,
           'ar_substock_name'  => $request->ar_product_ref,
   
           'substock_slug' => Str::slug($request->en_product_ref, '-'),
          
           'substock_photo' =>$path1 ?? '',
           'icon' =>$path1 ?? '',
        
       ];
   
           $output= Substock::create($new_product);
   
           $data = [
   
               "backend_response" => 'create new product',
               "photo" =>  $output,
               "response_code" => 200,
             ];
   
           return response()->json($data,200);

   }
}
