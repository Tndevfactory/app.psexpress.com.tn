
@php

// engine s

//cache()->flush();
$currency=session()->get('currency');


 cache()->put('currency', $currency );

 cache()->put('language', Request()->language);


@endphp

@extends('base')

@section('meta')
 <meta name="author" content="ch">


@endsection

@section('title', 'Categories')
@section('css')


@endsection


@section('content')


<div class='container'>

  <div class="row">
  <div class="col  bg-light pt-3">

      <ul class="home-category-menu list-unstyled bg-white d-none d-md-block" aria-labelledby="dropdownMenuButton1">
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Phone</a>
            <div class="container bg-danger dropdown-l3
             {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}}
            dropdown-menu">
              <div class="row">
                <div class="col bg-warning">
                  Column
                </div>
                <div class="col bg-light">
                  Column
                </div>
                <div class="col bg-info">
                  Column
                </div>
              </div>

            </div>

        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Informatique</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
             <div class="row">
                <div class="col">
                  Column
                </div>
                <div class="col">
                  Column
                </div>
                <div class="col">
                  Column
                </div>
              </div>
          </ul>

        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2 position-relative">
          <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Accessoire</a>

          <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </ul>
        </li>
      </ul>

  </div>
  <div class="col-8">
    @include('components.carousel')
  </div>
  <div class="col bg-light pt-3">

    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel magnam, quae necessitatibus quis aliquam tempore consequuntur aspernatur soluta nisi veritatis. Tempora ipsum vitae voluptatem quod quo error odit impedit inventore?
  </div>

  </div>





<h2 class='text-start fw-bold mt-5 mb-3 categories-title text-uppercase'> {{ __('Categories') }} </h2>

<div class="row row-cols-2 row-cols-md-6 gx-2 gy-4 ">

  @foreach ($categories as $category)
      <div class="col mb-3">
         <div class="card card-categorie text-white border border-0 h-100">
              <img src="{{ app()->environment('production') ? asset($category->category_image) : asset($category->category_image)}}"
              class="card-img" alt="...">
              <div class="card-img-overlay ">

                  <div style='background-color:rgba(0,0,0,0.5)' class="w-100">
                   </div>
                  <a href=""
                  class="stretched-link btn-sm">
                  </a>

              </div>
          </div>

          <div class="info ">
          <span class='text-center mt-1  d-block categories-title text-uppercase text-muted'>
                      @if(App::getLocale() === 'fr')
                         {{ $category->fr_category_name }}
                      @elseif(App::getLocale() === 'en')
                         {{ $category->en_category_name }}
                      @else
                         {{ $category->ar_category_name }}
                      @endif
           </span>
        </div>
      </div>

  @endforeach

</div>

<h2 class='text-start mt-5 mb-3 products-title text-uppercase'>  {{ __('Products') }} </h2>

<div class="row row-cols-2 row-cols-md-6 gx-2 gy-4">


  @foreach ($products as $product)
  <div class="col">
    <div class="card card-product h-100 shadow-sm position-relative">


      <img src="{{
      app()->environment('production') ? asset(isset($product->images[0]->product_image)
      ? 'public/'.$product->images[0]->product_image : 'media/products/support.png') :
       asset(isset($product->images[0]->product_image) ? $product->images[0]->product_image : 'media/products/support.png')}}"
       class="card-img-top" alt="...">

       @if($product->discount != '0')

       <span class="d-flex justify-content-center align-items-center position-absolute  "
           style='color:white; background-color:rgb(255, 146, 73);font-weight:700;
            text-shadow:1px 1px 1px rgba(0,0,0,0.2);font-size:0.8rem; height:2rem;width:2rem;border-radius:0%;
            right:0px;top:0px;box-shadow:1px 1px 8px rgba(0,0,0,0.1);' >
         -{{ number_format($product->discount,0,'.',',') }}%
       </span>

      @endif

      <div class="px-2 position-relative">

          <span class="card-text" style='font-size:0.9rem'>

             @if(App::getLocale() === 'fr')
              {{ Str::limit($product->fr_description , 20)}}

              @elseif(App::getLocale() === 'en')
                {{ Str::limit($product->en_description , 20)}}
              @else
                {{ Str::limit($product->ar_description , 20)}}
              @endif

          </span>



          <div class='price'>

                  <div class='fw-thin text-muted ' style='font-size:0.7rem'> {{ __('Price') }} en DT: </div>

                  <table class="table_desktop table  table-borderless d-none d-md-block" style='font-size:0.8rem'>
                    <thead style='font-size:0.8rem' class="table-light">
                      <tr>
                        <th scope="col">0..{{ number_format($product->seuil0,0,',',' ') }}</th>
                        <th scope="col">{{ number_format($product->seuil1,0,',',' ') }}..{{ number_format($product->seuil2,0,',',' ') }}</th>
                        <th scope="col">{{ number_format($product->seuil2,0,',',' ') }}..&infin;</th>
                      </tr>
                    </thead>
                    <tbody style='font-size:0.8rem'>
                      <tr>

                        <td>{{ number_format($product->price_seuil0,3,',',' ') }}</td>
                        <td>{{ number_format($product->price_seuil1,3,',',' ') }}</td>
                        <td>{{ number_format($product->price_seuil2,3,',',' ') }}</td>
                      </tr>

                    </tbody>
                  </table>

                  <table class="table_mobile table table-bordered  d-md-none" style='font-size:0.8rem'>

                    <tbody style='font-size:0.8rem'>
                      <tr>
                        <th scope="col">0..{{ number_format($product->seuil0,0,',',' ') }}</th>
                        <td>{{ number_format($product->price_seuil0,3,',',' ') }}</td>

                      </tr>
                      <tr>
                        <th scope="col">{{ number_format($product->seuil0,0,',',' ') }}..{{ number_format($product->seuil1,0,',',' ') }}</th>
                        <td>{{ number_format($product->price_seuil1,3,',',' ') }}</td>

                      </tr>
                      <tr>
                        <th scope="col">{{ number_format($product->seuil2,0,',',' ') }}..&infin;</th>
                        <td>{{ number_format($product->price_seuil2,3,',',' ') }}</td>

                      </tr>

                    </tbody>
                  </table>

                  <div class='buy-button-div-mobile row row-cols-2 gx-1 d-md-none d-flex' >
                    <div class="col-5 bg-info border-2 d-flex justify-content-center">
                      <a href='#'  class='btn buy-button-link_mobile' title='details' style='font-size:0.8rem'>Voir</a>
                    </div>
                    <div class="col-5 offset-1 bg-warning border-2 d-flex justify-content-center">
                      <a href='#'  class='btn buy-button-link_mobile  ' title='buy' style='font-size:0.8rem'>Acheter</a>
                    </div>
                 </div>

          </div>             {{-- end price --}}

              <div class='buy-button-div d-none d-md-flex' >
                      <a href='#'  class=' btn btn-primary  9buy-button-link' title='buy' >Voir</a>
                      <add-to-cart language={{ Request()->language }} product-id={{ $product->id }}></add-to-cart>
              </div>

      </div>         {{-- end cardbody--}}


    </div> {{-- end card --}}
  </div>  {{-- en col --}}
  @endforeach

</div>
<p class="mt-5 pt-5">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus quaerat quos ipsum quasi, laudantium asperiores eligendi cum voluptatum facilis veniam nesciunt magni veritatis assumenda sunt quo aut itaque temporibus.
</p>
</div>
@endsection


