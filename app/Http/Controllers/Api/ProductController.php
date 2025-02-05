<?php

namespace App\Http\Controllers\Api;

use App\Models\Stock;
use App\Models\Product;
use App\Models\Substock;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    public function showProduct(Request $requet){

        $product = Product::where('product_slug', $requet->slug)->first();
        $stock = Stock::where('id', $product->stock_id)->first();
        $substock = Substock::where('id', $product->substock_id)->first();

        // similar product
        $similar_products = Product::where('substock_id', $substock->id)->paginate(9);

        $data=[

            'product' => $product,
            'stock' => $stock,
            'substock' => $substock,
            'products' => $similar_products,

        ];

        return view('product', $data);


    }

   public function apiAllProducts(Product $product){

   


    $products= Product::orderby('created_at' , 'DESC')->get();

    $data = [

        "backend_response" => 'get products',
        "products" => $products,
        "response_code" => 200,

        ];
          return response()->json($data,200);

   }

   public function apiCreateProduct(Request $request){

     $output = new ConsoleOutput();
    $output->writeln('view console apiCreateProduct');
    $output->writeln($request);


        $validatedData = $request->validate([

         'photo1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

         ]);

    if($request->hasFile('photo1')) {

        $file = $request->file('photo1');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/products' ;
        $file->move($destinationPath,$fileName);
        $path1 = 'media/products/'.$fileName;
    }

    if($request->hasFile('photo2')) {

        $file = $request->file('photo2');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/products' ;
        $file->move($destinationPath,$fileName);
        $path2 = 'media/products/'.$fileName;
    }

    if($request->hasFile('photo3')) {

        $file = $request->file('photo3');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/products' ;
        $file->move($destinationPath,$fileName);
        $path3 = 'media/products/'.$fileName;
    }

    $new_product=[
        'fr_product_ref' => $request->fr_product_ref,
        'en_product_ref' => $request->en_product_ref,
        'ar_product_ref'  => $request->ar_product_ref,

        'product_slug' => Str::slug($request->en_product_ref, '-'),
        'product_sku'  => $request->color.'-'.$request->brand.'-'.$request->en_product_ref,

        'fr_description' => $request->fr_description,
        'en_description' => $request->en_description,
        'ar_description' => $request->ar_description,

        'price' => $request->price,
        'discount' => $request->discount,

        'seuil0' => $request->seuil0,
        'price_seuil0' => $request->price_seuil0,

        'seuil1' => $request->seuil1,
        'price_seuil1' => $request->price_seuil1,

        'seuil2' => $request->seuil2,
        'price_seuil2' => $request->price_seuil2,

        'photo1' =>$path1 ?? '',
        'photo2'=> $path2 ?? '',
        'photo3'=> $path3 ?? '',

        'color' => $request->color,
        'weight' => $request->weight,
        'dimension' => $request->dimension,
        'brand'=> $request->brand,


        'tax' => $request->tax,
        'fee' => $request->fee,

        // 'shop_id' => $request->shop_id,
        // 'stock_id' => $request->stock_id,
        // 'substock_id' => $request->substock_id,

        'shop_id' => 1,
        'stock_id' => 1,
        'substock_id' => 1,

    ];

        $output= Product::create($new_product);
        // $output= Product::insertGetId($new_product);

        $data = [

            "backend_response" => 'create new product',
            "photo" =>  $output,
            "response_code" => 200,
          ];

        return response()->json($data,200);

   }

   public function apiUpdateProduct(Request $request){
    
    $output = new ConsoleOutput();
    $output->writeln('view console apiUpdateProduct');
    $output->writeln($request->id);

       if($request->hasFile('photo1')) {

        $file = $request->file('photo1');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/products' ;
        $file->move($destinationPath,$fileName);
        $path1 = 'media/products/'.$fileName;
    }

    if($request->hasFile('photo2')) {

        $file = $request->file('photo2');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/products' ;
        $file->move($destinationPath,$fileName);
        $path2 = 'media/products/'.$fileName;
    }

    if($request->hasFile('photo3')) {

        $file = $request->file('photo3');
        $fileName = uniqid().'-'.$file->getClientOriginalName();
        $destinationPath = public_path().'/media/products' ;
        $file->move($destinationPath,$fileName);
        $path3 = 'media/products/'.$fileName;
    }

    $product = Product::where('id', $request->id )->first() ;
   
    $upd_product=[
        'fr_product_ref' => $request->fr_product_ref,
        'en_product_ref' => $request->en_product_ref,
        'ar_product_ref'  => $request->ar_product_ref,

        'product_slug' => Str::slug($request->en_product_ref, '-'),
        'product_sku'  => $request->color.'-'.$request->brand.'-'.$request->en_product_ref,

        'fr_description' => $request->fr_description,
        'en_description' => $request->en_description,
        'ar_description' => $request->ar_description,

        'price' => $request->price,
        'discount' => $request->discount,

        'seuil0' => $request->seuil0,
        'price_seuil0' => $request->price_seuil0,

        'seuil1' => $request->seuil1,
        'price_seuil1' => $request->price_seuil1,

        'seuil2' => $request->seuil2,
        'price_seuil2' => $request->price_seuil2,

        'photo1' =>$path1 ?? '',
        'photo2'=> $path2 ?? '',
        'photo3'=> $path3 ?? '',

        'color' => $request->color,
        'weight' => $request->weight,
        'dimension' => $request->dimension,
        'brand'=> $request->brand,


        'tax' => $request->tax,
        'fee' => $request->fee,

        // 'shop_id' => $request->shop_id,
        // 'stock_id' => $request->stock_id,
        // 'substock_id' => $request->substock_id,

        'shop_id' => 1,
        'stock_id' => 1,
        'substock_id' => 1,

    ];


        $output= $product->update($upd_product);
        // $output= Product::insertGetId($new_product);

        $data = [

            "backend_response" => 'product updated',
            "photo" =>  $output,
            "response_code" => 200,
          ];

        return response()->json($data,200);
    
}

    public function apiDeleteProduct(Request $request){

        $product = Product::where('id', $request->id )->first() ;
        $product->delete();

          $data = [

            "backend_response" => 'product deleted',
            "photo" =>  $product ,
            "response_code" => 200,
          ];

        return response()->json($data,200);

    
   }

    public function apiSearchProduct(Request $request){
    return 'apiSearchProduct';
   }
}
