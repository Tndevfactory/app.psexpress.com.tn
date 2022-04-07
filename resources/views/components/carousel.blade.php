
<div id="carouselExampleCaptions" class="carousel slide mt-4 d-none d-md-block" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  @php
  $crs=[1,2,3];
  @endphp

  @foreach ($crs as $cr )

  <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
      <div class="cover-shadow" 
      style='background-color:rgba(0,0,0,0.5);position:absolute;top:0;left:0;width:100%; min-height:100%'></div>
      <img src="{{ app()->environment('production') ? asset('public/media/products/carousel1.webp') : asset('media/products/carousel1.webp')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class='fs-2 mb-3'style='text-shadow: 1px 1px 1px rgba(0,0,0,0.5)'>Best products</h5>
        <a href=#' class='btn btn-warning mb-3 fs-6'>More details</a>
        <p class='fs-3' style='text-shadow: 1px 1px 1px rgba(0,0,0,0.5)'>Traditional art to discover about tunisia</p>
      </div>
    </div>
      
  @endforeach
    
 

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
