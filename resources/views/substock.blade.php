@extends('base')

@section('meta')
 <meta name="author" content="ch">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base-url" content="{{ config('app.url') }}">

 
@endsection

@section('title', 'subcategory')

@section('content')

<div class="container">

<div class="filtres d-flex justify-content-between">

  <nav aria-label="breadcrumb"> 
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home',['language' => Request()->language]) }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('show-category',['slug'=>$stock->stock_slug ,'language' => Request()->language]) }}" 
         class=" "> {{ $stock->fr_stock_name  }} </a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $substock->fr_substock_name }}</li>
    </ol>
  </nav>
  <form action="" class='form d-block' >
    <select class="form-select form-select-sm me-4" aria-label=".form-select-sm example">
      <option selected disabled>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
 </form>
</div>

  <div class="row row-cols-1 row-cols-md-2">
    <div class="col-12 col-md-2 bg-white shadow-sm">
      <h6>Produits:</h6>
      <ul class="list-group d-flex">
        <li class="list-group-item border border-0">{{ ucfirst($substock->fr_substock_name) }}</li>
        
      </ul>

    </div>
    
    <div class="col-12 col-md-10 ">
       
      {{-- start category products --}}

        @include('components.products.category_products')

        {{-- end category products --}}

    </div>

  </div>

  <div class="pagination justify-content-center mt-4">
    {{ $products->links() }}
  </div>
</div>
  
@endsection

