
@php

$crs=[1,2,3];
@endphp


<div id="carouselExampleCaptions" class="carousel slide mt-4 d-none d-md-block" data-bs-ride="carousel" style='z-index:0 !important'>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

  
    {{-- {{$loop->iteration == 1 ? 'active' : ''}} --}}

  <div class="carousel-item active">
  
      <div class="cover-shadow" 
      style='background-color:rgba(0,0,0,0.0);position:absolute;top:0;left:0;width:100%; min-height:100%'></div>
      <img src="{{  asset('media/ui/carousel/carousel-2.webp')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
        <a href=#' class='btn btn-warning mb-3 fs-6'>Cliquer pour plus de details</a>
       
      </div>
    </div>
  <div class="carousel-item ">
   
      <div class="cover-shadow" 
      style='background-color:rgba(0,0,0,0.0);position:absolute;top:0;left:0;width:100%; min-height:100%'></div>
      <img src="{{  asset('media/ui/carousel/carousel-1.webp')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     
        <a href=#' class='btn btn-warning mb-3 fs-6'>Cliquer pour plus de details</a>
     
      </div>
    </div>
  <div class="carousel-item ">
    
      <div class="cover-shadow" 
      style='background-color:rgba(0,0,0,0.0);position:absolute;top:0;left:0;width:100%; min-height:100%'></div>
      <img src="{{ asset('media/ui/carousel/carousel-3.webp')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
        <a href=#' class='btn btn-warning mb-3 fs-6'>Cliquer pour plus de details</a>
       
      </div>
    </div>
      
 
    
 

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
