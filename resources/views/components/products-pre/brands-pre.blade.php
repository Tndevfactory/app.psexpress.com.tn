
<h2 class='mt-5 mb-5 bg-warning text-dark py-2 text-center text-uppercase fs-5'>  {{ __('Marques') }} </h2>

<div id="carouselExampleCaptions3" class="carousel slide mt-4 " data-bs-ride="carousel" style='z-index:0 !important'>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

    
    {{-- {{$loop->iteration == 1 ? 'active' : ''}} --}}

  <div class="carousel-item active">
  
     
    <div class="row row-cols-1 row-cols-md-4">

      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/aspor.png') : asset('media/brand/aspor.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/inkax.png') : asset('media/brand/inkax.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/jbl.png') : asset('media/brand/jbl.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/kisonli.png') : asset('media/brand/kisonli.png')}}" class="d-block w-100" alt="...">
      </div>
      
     
    </div>
     
    </div>
  <div class="carousel-item ">
   
    <div class="row row-cols-1 row-cols-md-4">

      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/lax.png') : asset('media/brand/lax.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/sandisk.png') : asset('media/brand/sandisk.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/smart.png') : asset('media/brand/smart.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/star.png') : asset('media/brand/star.png')}}" class="d-block w-100" alt="...">
      </div>
      
    </div>
     
  </div>
  <div class="carousel-item ">
    <div class="row row-cols-1 row-cols-md-4">

      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/aspor.png') : asset('media/brand/aspor.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/inkax.png') : asset('media/brand/inkax.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/jbl.png') : asset('media/brand/jbl.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/brand/kisonli.png') : asset('media/brand/kisonli.png')}}" class="d-block w-100" alt="...">
      </div>
     
    
  </div>
      
 
    
 

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
