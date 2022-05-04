@extends('base') 

@section('meta')
 <meta name="author" content="ch">
@endsection

@section('title', 'product')


@section('content')

<div class="container">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home',['language' => Request()->language]) }}">Home</a></li>
             @if(App::isLocale('ar'))
                {!!  "&nbsp;/&nbsp;" !!}
              @endif
            <li class="breadcrumb-item"><a href="{{ route('show-category',['slug'=>$stock->stock_slug ,'language' => Request()->language]) }}" 
                class=" "> {{ $stock->fr_stock_name  }} </a></li>
             <li class="breadcrumb-item"><a href="{{ route('show-subcategory',['slug'=>$substock->substock_slug ,'language' => Request()->language]) }}" 
                class=" "> {{ $substock->fr_substock_name  }} </a></li>

             <li class="breadcrumb-item active" aria-current="page">{{ $product->fr_product_ref }}</li>
          </ol>
        </nav>
     
    <div class="row row-cols-1 row-cols-md-2 bg-white">

        <div class="col-12 col-md-6 bg-white ">

            <img-screener product="{{ $product }}"/>
                  

        </div>

        <div class="col-12 col-md-6 bg-white shadow-sm">
           
            <h5 class='fs-5 text-muted mt-2 bg-light p-3'>{{  ucfirst($product->fr_product_ref) }} </h5>
            <ul class="list-group d-flex bg-white">
                <li class="list-group-item border border-0 "> <span class=' text-muted'>Description:</span>  <span class=''>{{ $product->fr_description  }}</span>   </li>
                <li class="list-group-item border border-0 "> <span class=' text-muted'>Color:</span>  <span class=''>{{ $product->fr_description  }} </span>   </li>
                <li class="list-group-item border border-0 "> <span class='text-muted'>Seuil et prix:</span>    </li>
                
                <li class="list-group-item border border-0 d-flex9 justify-content-between pe-4"> 
                    <table class='table table-borderless'>
                        <tr>    
                            <td>  <span class=" text-center">1..{{ number_format($product->seuil0,0,',',' ') }}</span></td>
                            <td>   <span class=" text-center" >{{ number_format($product->seuil1,0,',',' ') }}..{{ number_format($product->seuil2,0,',',' ') }}</span></td>
                            <td> <span  class=" text-center" >{{ number_format($product->seuil2,0,',',' ') }}++</span></td>
                        </tr>    
                        <tr>    
                            <td>  <span class="text-nowrap">{{ number_format($product->price_seuil0,3,',',' ') }} DT</span></td>
                            <td>    <span class="text-nowrap">{{ number_format($product->price_seuil1,3,',',' ') }} DT</span></td>
                            <td>  <span class="text-nowrap text-success">{{ number_format($product->price_seuil2,3,',',' ') }} DT</span></td>
                        </tr>    
                    </table>
                                     
                </li>
                <li class="list-group-item border border-0 "> <span class='text-muted'>Description ch:</span>  <span class=''>{{ $product->fr_description  }}</span>   </li>
                <li class="list-group-item border border-0 "> <span class='text-muted'>Color:</span>  <span class=''>{{ $product->fr_description  }} </span>   </li>
               
                <li class="list-group-item border border-0 "> <span class=' text-muted'>Description:</span>  <span class=''>{{ $product->fr_description  }}</span>   </li>
                <li class="list-group-item border border-0 "> <span class=' text-muted'>Color:</span>  <span class=''>{{ $product->fr_description  }} </span>   </li>
               
                <li class="list-group-item border border-0 "> <span class=' text-muted'>Description:</span>  <span class=''>{{ $product->fr_description  }}</span>   </li>
                <li class="list-group-item border border-0 "> <span class=' text-muted'>Color:</span>  <span class=''>{{ $product->fr_description  }} </span>   </li>
               
                <li class="list-group-item border border-0 d-flex gap-2"> 
                  
                    <add-to-cart language={{ Request()->language }} product-id={{ $product->id }} large=true ></add-to-cart> 
                    <a href="{{ route('home',['language' => Request()->language]) }}" class="btn btn-outline-primary d-block">back to shop</a>
                 </li>
              
                
            </ul>


        </div>

    </div> {{-- end product row--}}

    
    {{--  avis rating --}}
    {{-- <h2 class='mt-5 mb-3 text-dark  py-2 text-center text-uppercase fs-5'>  {{ __('Avis') }} </h2> --}}

     
        <div id="avis" class="avis">
            <h3>Avis </h3>
            <p></p>
        </div>
      
    {{-- produits similaires apercu et avis  --}}

     {{-- start similar products --}}

    <div class="col-12 col-md-12">
       
          @include('components.products.similar_products')
  
    </div>

    {{-- end similar products --}}

    <div class="pagination justify-content-center mt-4">
    {{ $products->links() }}
    </div>
</div> {{-- end container  --}}

@endsection


