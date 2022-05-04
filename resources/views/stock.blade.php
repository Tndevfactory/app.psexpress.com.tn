@extends('base') 

@section('meta')
 <meta name="author" content="ch">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base-url" content="{{ config('app.url') }}">

 
@endsection

@section('title', 'category')

@section('content')

<div class="container">

<div class="filtres d-flex justify-content-between">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home',['language' => Request()->language]) }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $stock->fr_stock_name }}</li>
    </ol>
  </nav>

  <form action="" class='form d-block' >
    <select name="filter_category" class=" f-select form-select form-select-sm me-4 " aria-label=".form-select-sm example">
      <option selected disabled>Trier</option>
      <option value="priceD">prix descendant</option>
      <option value="priceA">prix descendant</option>
      <option value="nomA">par nom Ascendant</option>
      <option value="nomD">par nom Descendant</option>
    </select>
  </form>

</div>

  <div class="row row-cols-1 row-cols-md-2">
    <div class="col-12 col-md-2 bg-white shadow-sm">
      <h6>Subcategories:</h6>
      <ul class="list-group d-flex">
        @foreach ($substocks as $substock)
           <li class="list-group-item border border-0">
            <a href="{{ route('show-subcategory', ['slug'=>$substock->substock_slug ,'language' => Request()->language]) }}">
              {{ ucfirst($substock->fr_substock_name) }}&nbsp;({{ $substock->products_count }})</a></li>
        @endforeach
       
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

{{-- @section('js')
<script>
  let f=document.querySelector('.form')
  let fSelect=document.querySelector('.f-select')
  alert(fSelect)
  fSelect.addEventListener('change', ()=>{
    alert(f)
    console.log(f)
  })
</script>
@endsection --}}