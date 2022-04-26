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
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>

  <select class="form-select form-select-sm me-4 w-25" aria-label=".form-select-sm example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

</div>

  <div class="row row-cols-1 row-cols-md-2">
    <div class="col-12 col-md-2 bg-light">
      <h5>subcategories:</h5>
      <ul class="list-group d-flex">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
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

