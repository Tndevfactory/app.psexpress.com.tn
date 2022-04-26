
@php

$crs=[1,2,3];
@endphp


<div id="carouselExampleCaptions2" class="carousel slide mt-4 " data-bs-ride="carousel" style='z-index:0 !important'>
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
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
    </div>
     
    </div>
  <div class="carousel-item ">
   
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
    </div>
     
  </div>
  <div class="carousel-item ">
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
      <div class="col mb-3">
        <img src="{{ app()->environment('production') ? asset('public/media/ui/carousel/carousel-1.webp') : asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    
  </div>
      
 
    
 

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
