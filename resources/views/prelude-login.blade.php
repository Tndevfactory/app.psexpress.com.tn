
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

@section('title', 'Accueil')
@section('css')


@endsection


@section('content')

@include('components.navbar-pre') 

<div class='container'>

  <div class="row ">
  <div class="col-12 col-md-2  ">
   
      <ul class="home-category-menu list-unstyled  d-none d-md-block mt-4 bg-ehite"
       style='border:1px solid rgba(202, 194, 194, 0.5);min-height:94%' aria-labelledby="dropdownMenuButton1">
        <li class="dropdown-l2-home position-relative">
          <a class="dropdown-item" href=" {{ route('login-init', ['language' => Request()->language]) }}" >
            <i class='mdi mdi-cellphone  text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>  {{ __('Téléphonie') }}</a>
            <div class="container  dropdown-l3-home
             {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl-home ' : 'dropdown-l3-ltr-home '}} 
            dropdown-menu">
            <div class="row row-cols-12 row-cols-md-2">
              <div class="col ">
               <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Smartphone') }}</a> 
              </div>
              <div class="col ">
                
                <a href="{{ route('login-init', ['language' => Request()->language]) }}" class='text-nowrap '>{{ __('Téléphone portable') }}</a> 
              </div>
              <div class="col ">
                
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Tablette tactile') }}</a> 
              </div>
              <div class="col ">
               
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Accessoire téléphone') }}</a> 
              </div>
            </div>

            </div>
          
        </li>
        <li class="dropdown-l2-home position-relative">
          <a class="dropdown-item" href="{{ route('login-init', ['language' => Request()->language]) }}" >
            <i class='mdi mdi-desktop-classic text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
            {{ __('Informatique') }}</a>
        
          <ul class=" dropdown-l3-home {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl-home ' : 'dropdown-l3-ltr-home '}} 
              dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <div class="row row-cols-12 row-cols-md-2">
                <div class="col">
                  <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Ordinateur portable') }}</a> 
                </div>
                <div class="col">
                  <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Ordinateur de bureau') }}</a> 
                </div>
                <div class="col">
                  <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Accessoires informatique') }}</a> 
                </div>
              </div>
          </ul>
        
        </li>
        <li class="dropdown-l2-home position-relative">
          <a class="dropdown-item" href="{{ route('login-init', ['language' => Request()->language]) }}" >
            <i class='mdi mdi-play-network  text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
            {{ __('Multimédia') }}</a>
        
          <ul class=" dropdown-l3-home {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl-home ' : 'dropdown-l3-ltr-home '}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row row-cols-12 row-cols-md-2">
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Televiseur') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Video-projecteur') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Appareil photo') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Console de jeux') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Audio et son') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Recepteur') }}</a> 
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown-l2-home position-relative">
          <a class="dropdown-item" href="{{ route('login-init', ['language' => Request()->language]) }}" >
            <i class='mdi mdi-content-save-settings text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
            {{ __('Stockage') }}</a>
        
          <ul class=" dropdown-l3-home {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl-home ' : 'dropdown-l3-ltr-home '}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row row-cols-12 row-cols-md-2">
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Disque interne') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Disque dur externe') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Cle usb') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Carte memoire') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Cd et dvd') }}</a> 
              </div>
            
            </div>
          </ul>
        </li>
        <li class="dropdown-l2-home position-relative">
          <a class="dropdown-item" href="{{ route('login-init', ['language' => Request()->language]) }}" >
            <i class='mdi mdi-camera-lock text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
            {{ __('Securite') }}</a>
        
          <ul class=" dropdown-l3-home {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl-home ' : 'dropdown-l3-ltr-home -home '}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="row row-cols-12 row-cols-md-2">
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Camera de surveillence') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}"> {{ __('Systeme d\'alarme') }}</a> 
              </div>
              <div class="col">
                <a href="{{ route('login-init', ['language' => Request()->language]) }}">{{ __('Onduleurs') }}</a> 
              </div>
              
            </div>
          </ul>
        </li>
     
      </ul>
   
  </div>
  <div class="col-12 col-md-10">
    @include('components.carousel')
  </div> 
  
  </div>


  <h2 class='mt-5 mb-3 categories-title text-center text-uppercase fs-5'> {{ __('Categories') }} </h2>

  <div class="row row-cols-2 row-cols-md-5 gx-3 gy-4 ">

 
 @foreach ($stocks as $stock)
      <div class="col mb-3" style='z-index:0 !important'> 
         <div class="card card-categorie border border-0 ">
             
             <img src="{{ app()->environment('production') ? 
              asset('public/'.$stock->stock_photo) : asset($stock->stock_photo)}}" 
              class="card-img img-fluid " height=200 width=200 
               style='height:auto;max-width:100%;display:block' alt={{ $stock->fr_stock_name }}
              
              >
              <a href="{{ route('login-init', ['language' => Request()->language]) }}"
                   class="stretched-link ">  </a>
          </div>
          <span class='text-center d-block mt-2 categorie-caption text-uppercase '> 
                      @if(App::getLocale() === 'fr')
                         {{ $stock->fr_stock_name }}
                      @elseif(App::getLocale() === 'en')
                         {{ $stock->en_stock_name  }}
                      @else
                         {{ $stock->ar_stock_name }}
                      @endif 
           </span>
        
      </div>
      
  @endforeach
  
  </div>
  {{-- end categories --}}

  {{-- start deal of the day --}}
  <h2 class='mt-5 mb-3 categories-title text-center text-uppercase fs-5'> {{ __('Vente Flash') }} </h2>
  <h2 class=' fw-bold text-center fs-5 text-white bg-danger py-2 mb-4' id="demo"> </h2>

  @include('components.carousel2')

    {{-- end deal of the day --}}


    {{-- start new products --}}

    @include('components.products-pre.new_products-pre')

    {{-- end new products --}}

    {{-- start teasing1  --}}

    @include('components.products-pre.cta-pre')

    {{-- end teasing1 products --}}

    {{-- start best sellers products --}}

    @include('components.products-pre.bestseller_products-pre')

    {{-- end best sellers products --}}

    {{-- start brands --}}

    @include('components.products-pre.brands-pre')

    {{-- end  brands --}}

    {{-- start all products --}}

    @include('components.products-pre.all_products-pre')

    {{-- end all products --}}

    <div class="pagination justify-content-center mt-4">
      {{ $products->links() }}
    </div>

    <div class="my-3  ">

      <h6>Acheter en ligne sur Psexpress:</h6>
      <p>
        Psexpress est le premier site de vente en gros en Tunisie, notre plate-forme permet de mettre en relation les detaillants et les vendeurs dans le but de réaliser de très bonnes affaires tout en bénéficiant de l'expertise Psexpress. Vous cherchez un ordinateur, un smartphone, une tablette, ou encore une paire de chaussure? vous bénéficierez toujours des prix les plus bas, parmi nos milliers de produits en ligne. Psexpress permet l'achat en ligne de manière simple et pratique avec des délais de livraison courts. De plus, nous vous assurons des transactions sécurisées et fiables. Avec Psexpress vous allez pouvoir effectuer vos achats au meilleur prix, en toute sécurité et sans sortir de chez vous!
      </p>
    </div>
</div> {{-- end container --}}

@include('components.footer-pre') 
@endsection

@section('js')
<script>
      // Set the date we're counting down to
    var countDownDate = new Date("Jun 27, 2022 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      // document.getElementById("demo").innerHTML = days + "jours " + hours + "h "
      // + minutes + "m " + seconds + "s ";
      document.getElementById("demo").innerHTML = hours + " heures "
      + minutes + " minutes " + seconds + " secondes ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Fin de l'offre";
      }
    }, 1000);
</script>




@endsection


