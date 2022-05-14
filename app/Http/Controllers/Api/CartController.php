<?php

namespace App\Http\Controllers\Api;

use App\Models\Tax;
use App\Models\Shop;
use App\Models\User;
use App\Models\Photo;
use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use SebastianBergmann\Environment\Console;
use App\Http\Controllers\ShippingController;
use Symfony\Component\Console\Output\ConsoleOutput;

class CartController extends Controller
{

    public function index(Request $request){
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        $locale = App::getLocale();
        $data =[
            'products' => $products ,
            'locale' => $locale
        ];
         return response()->json($data, 200);

    }
    // ShippingController $shippingController

    public function seuilPriceFinder($qty, $product){

        if($qty <  (float)$product->seuil1){
            return (float)$product->price_seuil0;
        }elseif($qty >= (float)$product->seuil1 && $qty <= (float)$product->seuil2){
            return  (float)$product->price_seuil1;
        }elseif($qty > (float)$product->seuil2){
            return  (float)$product->price_seuil2;
        }

        return $product->price;
    }

    public function addToCart(Request $request ){

        $lang = $request->productId[0];

        $product_count = Product::where('id', $request->productId[1])->count();


        if($product_count  <= 0){
            
            $data =[
                'cart' => cache()->get('cart') ?? '',
                'compta' => $compta_result['compta'] ?? '',
                'cart_counter' =>  0,
                'total_cart' => 0,
                'responseBackend' => 'products empty',
                'response_code' => 403,
            ];

            return response()->json($data, 200);

           }else{

            $product = Product::where('id', $request->productId[1])->first();
           
           }

        //get user

        $user = cache('user');

        if($lang ==='fr'){
            // general responses
            $product_added_to_cart= 'Produit ajouté avec succès';

            // errors
            $product_not_found='Produit inexistant';
            $stock_threshhold='Limite de stock ';

            $product_name = $product->fr_product_ref;

        }elseif($lang ==='en'){

            // general responses
            $product_added_to_cart= 'New Item added successfully';

            // errors
            $product_not_found='Non-existent product';
            $stock_threshhold='Stock limit ';
            $product_name = $product->en_product_ref;

        }else{ //ar

            // general response
            $product_added_to_cart= 'اضافة المنتج بنجاح';

            // errors
            $product_not_found='منتج غير موجود';
            $stock_threshhold='حد المخزون ';
            $product_name = $product->ar_product_ref;

        }

        

            $image_count = Photo::where('product_id', $product->id)->count();

           if($image_count <= 0){
            $image = 'media/products/support.png';
           }else{
                $image = Photo::where('product_id', $product->id)->first();
                $image = $image->thumb;
           }




           $tax_count = Tax::where('id', $product->tax_id)->count();
           if($tax_count  <= 0){
            $tax_rate = 19;
           }else{
            $tax = Tax::where('id', $product->tax_id)->first();
            $tax_rate = floatval($tax->rate);
           }


           $stock_count = Stock::where('id', $product->stock_id)->count();
         

           if($stock_count  <= 0){
            $stock_slug='no_stock_slug_found';
          
            $data =[
                'cart' => cache()->get('cart') ?? '',
                'compta' => $compta_result['compta'] ?? '',
                'cart_counter' =>  0,
                'total_cart' => 0,
                'responseBackend' => 'stock empty',
                'response_code' => 403,
            ];

            return response()->json($data, 200);

           }else{
            $stock = Stock::find($product->stock_id)->where('id', $product->stock_id)->first();
            $stock_slug=$stock->stock_slug;
           }

           $shop_count = Shop::where('id', $product->seller_id)->count();
           if($shop_count  <= 0){
            $shop = 1;
           }else{
            $shop = Shop::where('id', $product->seller_id)->first();
            $shop=$shop->id;
           }

           $product_count_sold = Product::where('stock_id',$product->stock_id)->where('status', 'sold')->count();
           $product_count_total = Product::where('stock_id',$product->stock_id)->count();
           $product_count_available = Product::where('stock_id',$product->stock_id)->where('status', 'available')->count();



        $cart = cache()->get('cart');

        if(!$cart){
            // cart doesnt exist and product doesnt exist, so dealing with array and create cart aftercreate with qty=1  wo atba3
            $cart =[

                $product->id => [
                                "id" => $product->id,
                                "product_name" => $product_name,
                                "product_stock_quantity" =>floatval($product_count_available),
                                "stock_slug" => $stock_slug,
                                "price" =>  (float)$this->seuilPriceFinder(1 , $product) ,
                                "qty" => 1,
                                "price_by_qty" => currencyFormat($this->seuilPriceFinder(1 , $product)),
                                "language" => $lang,
                                "user" => $user ? $user->id : null,
                                "discount" => floatval($product->discount),
                                "discount_value" => currencyFormat( floatval($product->discount/100) *  (float)$this->seuilPriceFinder(1 , $product)) ,
                                "status" => $product->status,
                                "cart_date" => date('Y-m-d H:i:s'),
                                "product_img" => $image,
                                "tax" =>$tax_rate,
                                // "tax_value" => currencyFormat(($tax_rate/100) *  (float)$this->seuilPriceFinder(1 , $product)),
                                "shop" => $shop,

                                ]
                ];

                cache()->put('cart', $cart, 3600); // une heure d'expiration cache time in secondes

                $cart=cache()->get('cart');

                 //compta
                 $compta_result = $this->compta($cart);

                 $qty = cache()->get('compta')['total_qty'] ?? 0.00;
                 $totat_price_ht = cache()->get('compta')['totat_price_ht'] ?? 0.00;

                    $data =[
                        'cart' => cache()->get('cart') ?? '',
                        'compta' => $compta_result['compta'] ?? '',
                        'cart_counter' =>  (float)$qty,
                        'total_cart' =>  $totat_price_ht,
                        'responseBackend' => $product_added_to_cart,
                        'response_code' => 200,
                    ];

                    return response()->json($data, 200);


        }else{ // cart exist product exist increment qty wo atba3

            if(isset($cart[$request->productId[1]])){
                // product exist increment  wo atba3

                $cart[$request->productId[1]]['qty']++;
                $cart[$request->productId[1]]["price"] = (float)$this->seuilPriceFinder($cart[$request->productId[1]]['qty'] , $product) ;
                $cart[$request->productId[1]]["price_by_qty"] = currencyFormat((float)($cart[$request->productId[1]]['qty'] * $cart[$request->productId[1]]['price']));
                $cart[$request->productId[1]]["discount_value"] = currencyFormat(($cart[$request->productId[1]]['discount']/100) * $cart[$request->productId[1]]['price'] * (float)$cart[$request->productId[1]]['qty']);
                // $cart[$request->productId[1]]["tax_value"] = currencyFormat(($cart[$request->productId[1]]['tax']/100) * $cart[$request->productId[1]]['price'] * (float)$cart[$request->productId[1]]['qty']);

                if($cart[$request->productId[1]]['qty'] <= $cart[$request->productId[1]]["product_stock_quantity"]){

                    cache()->put('cart', $cart, 3600);
                    //compta
                    $compta_result=$this->compta($cart);

                    $qty = cache()->get('compta')['total_qty'] ?? 0.00;
                    $totat_price_ht = cache()->get('compta')['totat_price_ht'] ?? 0.00;

                        $data =[
                            'cart' => cache()->get('cart') ?? '',
                            'cart_counter' => (float)$qty ?? '',
                            'total_cart' =>  $totat_price_ht,
                            'compta' => $compta_result['compta'] ?? '',
                            'responseBackend' =>  $product_added_to_cart,
                            'response_code' => 200,
                         ];

                    return response()->json($data, 200);

                }else{
                    $qty = cache()->get('compta')['total_qty'] ?? 0.00;
                    $totat_price_ht = cache()->get('compta')['totat_price_ht'] ?? 0.00;

                        $data =[
                            'cart' => cache()->get('cart') ?? '',
                            'compta' => cache()->get('compta') ?? '',
                            'cart_counter' => (float)$qty ?? '',
                            'total_cart' =>  $totat_price_ht,
                            'responseBackend' => $stock_threshhold,
                            'response_code' => 403,
                         ];
                    return response()->json($data, 243);
                }

            }else{
             // product doesnt exist create with qty=1  but cart exist so dealing with cart directly wo atba3

             $cart[$product->id] = [
                "id" => $product->id,
                "product_name" => $product_name,
                "product_stock_quantity" =>floatval($product_count_available),
                "stock_slug" => $stock_slug,
                "price" =>  (float)$this->seuilPriceFinder(1 , $product) ,
                "qty" => 1,
                "price_by_qty" => currencyFormat($this->seuilPriceFinder(1 , $product)),
                "user" => $user ? $user->id : null,
                "language" => $lang,
                "discount" => floatval($product->discount),
                "discount_value" => currencyFormat(($product->discount/100) *  (float)$this->seuilPriceFinder(1 , $product)) ,
                "status" => $product->status,
                "cart_date" => date('Y-m-d H:i:s'),
                "product_img" => $image,
                "tax" => $tax_rate,
                // "tax_value" => currencyFormat(($tax_rate/100) *  (float)$this->seuilPriceFinder(1 , $product)),
                "shop" => $shop,
             ];
                 cache()->put('cart', $cart, 3600);

                 $compta_result = $this->compta($cart);
                 $qty = cache()->get('compta')['total_qty'] ?? 0.00;
                 $totat_price_ht = cache()->get('compta')['totat_price_ht'] ?? 0.00;

                    $data =[
                        'cart' => cache()->get('cart') ?? '',
                        'cart_counter' =>  (float)$qty,
                        'total_cart' =>  $totat_price_ht,
                        'compta' => $compta_result['compta'] ?? '',
                        'responseBackend' => $product_added_to_cart,
                        'response_code' => 200,
                    ];

                    return response()->json($data, 200);

            }

         }

    }


    public function compta($cart){
        // init calculation

        $totat_qty=0.00;
        $totat_price_ht=0.00;
        $totat_discount=0.00;
        $total_taxes=0.00;
        $total_before_coupon=0.00;
        $coupon_value=0.00;
        $shipment_fee=0.00;
        $total_ttc=0.00;
        $total_ttc_before_coupon=0.00;

        //compta
        if($cart){

            foreach($cart as $id=>$info){
                $totat_qty += $info['qty'];
                $totat_price_ht += $info['qty'] * $info['price'];
                $totat_discount += $totat_price_ht * ($info['discount'] / 100 );
                $total_taxes += ($totat_price_ht - $totat_discount  ) * ($info['tax'] / 100 );
            }
                $total_before_coupon = ($totat_price_ht - $totat_discount) + $total_taxes;
            // test sur seuil et shipping
                $shipment_fee = $totat_price_ht > 300.00 ? 0.00 : 8.00 ;
                $total_ttc_before_coupon = $total_before_coupon + $shipment_fee  ;
        }

        $compta=[
            'total_qty' => $totat_qty,
            'totat_price_ht' => currencyFormat($totat_price_ht),
            'totat_discount' => currencyFormat($totat_discount),
            'total_taxes' => currencyFormat($total_taxes),
            'total_before_coupon' => currencyFormat($total_before_coupon) ,
            'shipment_fee' => currencyFormat($shipment_fee) ,

            'total_ttc_before_coupon' => currencyFormat($total_ttc_before_coupon),
        ];

         cache()->put('compta', $compta, 3600);

         $compta_result=[ 'compta'=>  cache()->get('compta') ?? '', ];

        return $compta_result;

    }

    public function deleteAllCart(Request $request){

        cache()->forget('cart') ;
        cache()->forget('compta');


        $data = [
            'cart' =>  '',
            'compta' =>  '',
            'cart_counter' =>  '',
            'total_cart' =>  '',
            'responseBackend' => 'all item cart deleted',
            'language' => 'fr',
            'response_code' => 200,
        ];

        return response()->json($data, 200);

    }
    public function deleteItemCart(Request $request){


        $cart = cache()->get('cart');

        if(isset($cart[$request->productId[1]])){

            unset($cart[$request->productId[1]]);
        }


        cache()->put('cart', $cart, 3600);

        //compta
        $compta_result = $this->compta($cart);
        $qty = cache()->get('compta')['total_qty'] ?? 0.00;
        $totat_price_ht = cache()->get('compta')['totat_price_ht'] ?? 0.00;

           $data =[
               'cart' => cache()->get('cart') ?? '',
               'cart_counter' =>  (float)$qty,
               'total_cart' =>  $totat_price_ht,
               'compta' => $compta_result['compta'] ?? '',
               'responseBackend' => 'cart item removed',
               'response_code' => 200,
           ];

           return response()->json($data, 200);

        // $data = [
        //     'cart' =>  '',
        //     'compta' =>  '',
        //     'cart_counter' =>  '',
        //     'total_cart' =>  '',
        //     'responseBackend' => 'all item cart deleted',
        //     'language' => 'fr',
        //     'response_code' => 200,
        // ];

        // return response()->json($data, 200);

    }
    public function updateQtyItemCart(Request $request){


        $req = [
            'lang' => $request->productId[0],
            'pid' => $request->productId[1],
            'value' => $request->productId[2],
            ] ;

        $product = Product::where('id', $req['pid'])->first();
        $cart = cache()->get('cart');

        if(isset($cart[$req['pid']])){
            $cart[$req['pid']]['qty']= (float)$req['value'];
            $cart[$req['pid']]["price"] =  $this->seuilPriceFinder($cart[$req['pid']]['qty'] , $product);
            $cart[$req['pid']]["price_by_qty"] = currencyFormat($cart[$req['pid']]['qty'] * $this->seuilPriceFinder($cart[$req['pid']]['qty'] , $product));
             $cart[$req['pid']]["discount_value"] = currencyFormat(($cart[$req['pid']]['discount']/100) * $cart[$req['pid']]['price'] * $cart[$req['pid']]['qty']);
            // $cart[$req['pid']]["tax_value"] = currencyFormat(($cart[$req['pid']]['tax']/100) * $cart[$req['pid']]['price'] * $cart[$req['pid']]['qty']);
        }

        // $output = new ConsoleOutput();
        // $output->writeln('cart');
        // $output->writeln(  $cart[$request->productId[1]]['price'] );
        // $output->writeln(  $cart[$request->productId[1]]['qty'] );
        // $output->writeln(  $cart[$request->productId[1]]['qty'] * $cart[$request->productId[1]]['price'] );
        // return ;

        cache()->put('cart', $cart, 3600);
        //compta
        $compta_result = $this->compta($cart);
        $qty = cache()->get('compta')['total_qty'] ?? 0.00;
        $totat_price_ht = cache()->get('compta')['totat_price_ht'] ?? 0.00;

           $data =[
               'cart' => cache()->get('cart') ?? '',
               'cart_counter' =>  (float)$qty,
               'total_cart' =>  $totat_price_ht,
               'compta' => $compta_result['compta'] ?? '',
               'responseBackend' => 'product item updated',
               'response_code' => 200,
           ];

           return response()->json($data, 200);



    }


}
