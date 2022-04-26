@extends('base')

@section('meta')
 <meta name="author" content="ch">
@endsection

@section('title', 'product')


@section('content')

<div class="container">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
          </ol>
        </nav>
     
    <div class="row row-cols-1 row-cols-md-2 bg-light">

        <div class="col-12 col-md-6 ">

            <div class="teasing1 my-4" >
 
                <img class='img-fluid d-block' style='width:100%;object-fit: cover;'
                src="{{ app()->environment('production') ? asset('public/media/cta/teasing1.webp') : asset('media/cta/teasing1.webp')}}" class="d-block w-100" alt="...">
                
            </div>

            <div class="row mt-3">
                <div class="col">
                    <img class='img-fluid d-block' style='width:100%;object-fit: cover;'
                    src="{{ app()->environment('production') ? asset('public/media/cta/teasing1.webp') : asset('media/cta/teasing1.webp')}}" class="d-block w-100" alt="...">
     
                </div>
                <div class="col">
                    <img class='img-fluid d-block' style='width:100%;object-fit: cover;'
                    src="{{ app()->environment('production') ? asset('public/media/cta/teasing1.webp') : asset('media/cta/teasing1.webp')}}" class="d-block w-100" alt="...">
     
                </div>
                <div class="col">
                    <img class='img-fluid d-block' style='width:100%;object-fit: cover;'
                    src="{{ app()->environment('production') ? asset('public/media/cta/teasing1.webp') : asset('media/cta/teasing1.webp')}}" class="d-block w-100" alt="...">
     
                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 ">
           
            <h5>product:</h5>
            <ul class="list-group d-flex">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>


        </div>

    </div> {{-- end product row--}}

    
    {{-- apercu et avis  --}}
    <h2 class='mt-5 mb-3 text-dark  py-2 text-center text-uppercase fs-5'>  {{ __('Apercu Products') }} </h2>

    <ul class="nav nav-pills nav-justified fw-bold">

        <li  class="nav-item ">
          <a class="nav-link btn tablinks apercu active" href="#">Apercu</a>
        </li>

        <li  class="nav-item ">
          <a class="nav-link btn tablinks avis" href="#">Avis</a>
        </li>
       
      </ul>

      <!-- Tab content -->
        <div id="London" class="tabcontent">
            <h3>Details techniques</h3>
            <p>details technique</p>
        </div>
        
        <div id="Paris" class="tabcontent">
            <h3>Avis</h3>
            <p>avis vendeurs</p>
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

