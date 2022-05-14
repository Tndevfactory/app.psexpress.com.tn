
@php

// engine s

//cache()->flush();
$currency=session()->get('currency');


 cache()->put('currency', $currency );
       
 cache()->put('language', Request()->language);


@endphp

<nav class="header ">
  <div class="container px-3 d-flex justify-content-between align-items-center  ">
    
    <div class="info d-flex justify-content-center align-items-center">
      <a href="{{ route('seller-agreement', ['language' => Request()->language]) }}" class='text-decoration-none'>
       <i class='mdi mdi-star-circle text-white'></i> 
       <span class='text-white fs-6'>Vendre sur UBEI</span> 
      </a>
    </div>
     
     <div class="config d-flex align-items-center justify-content-center">
      
      

      <ul class=" lang_dropdown m-0  d-none d-md-inline-block">
   
        <li class="dropdown">
          <a class="dropdown-toggle" href="#"  data-bs-toggle="dropdown" >

             @if (App::getLocale() == 'ar')

                🇦🇪

              @elseif (App::getLocale() == 'fr')
              
                🇨🇵

              @elseif (App::getLocale() == 'en')
              
                🇬🇧

              @endif

          </a>
          <ul class="dropdown-menu language" style="min-width:2rem">
            <li class='language-item'><a class="dropdown-item" href="{{ route(Route::currentRouteName(), ['fr', 'slug' => Request()->slug , Request()->getQueryString()  ]) }}">🇨🇵</a></li>
            <li class='language-item'><a class="dropdown-item" href="{{ route(Route::currentRouteName(), ['en', 'slug' => Request()->slug , Request()->getQueryString()  ]) }}">🇬🇧</a></li>
            <li class='language-item'><a class="dropdown-item" href="{{ route(Route::currentRouteName(), ['ar', 'slug' => Request()->slug , Request()->getQueryString()  ]) }}">🇦🇪</a></li>
          </ul>
        </li>
      </ul> 
     </div>
          
        
    </div>
  <div>

</nav>
<nav class="navbar-block stick-top">
  <div class="container navbar-block-menu">
    <div class="row ">
      <div class="col-md-2  d-flex justify-content-start align-items-center">
        
        <div class="d-inline-block mb-1 mb-md-0 ">
          <a href="{{ route('home',['language' => Request()->language]) }}">
            <img src="{{ 
                asset('/media/logo/newlogopsexpress.jpg')}}"
            alt="logo psexpress" class="logo">
            <h4 class="d-inline-block text-capitalize" style='color:#000000'>UBEI</h4>
         </a>
        </div>
      </div>
      <div class="col-md-8 ">

        <form>
          <div class="input-group  search-bar mx-auto ">
            <div class="dropdown d-none d-md-inline-block  {{ App::getLocale() === 'ar' ? 'ms-md-2 ' : 'me-md-2 '}} ">
              <button class="btn btn-light  dropdown-toggle"  
                 style='background:rgb(233, 240, 246);' type="button" id="dropdownMenuButton1"
                 data-bs-toggle="dropdown" aria-expanded="false">
               <i class='mdi mdi-menu mx-1 fs-5'></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" 
                style="{{ App::getLocale() === 'ar' ? 'text-align:right; direction: rtl' : 'text-align:left; direction: ltr'}}">
              
                <li class="dropdown-l2 position-relative" >
                  <a class="dropdown-item" href="{{ route('show-category', ['slug'=>'telephonie','language' => Request()->language]) }}" >
                  
                    <i class='mdi mdi-cellphone text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2 ' : 'me-2'}} '></i>
                    {{ __('Téléphonie') }}</a>
                  
                    <div class="container  dropdown-l3
                     {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} 
                    dropdown-menu">
                      <div class="row row-cols-12 row-cols-md-2">
                        <div class="col ">
                         <a href="{{ route('show-subcategory',['slug'=>'smartphone' ,'language' => Request()->language]) }}">{{ __('Smartphone') }}</a> 
                        </div>
                        <div class="col ">
                          
                          <a href="{{ route('show-subcategory',['slug'=>'telephone-portable' ,'language' => Request()->language]) }}" class='text-nowrap '>{{ __('Téléphone portable') }}</a> 
                        </div>
                        <div class="col ">
                          
                          <a href="{{ route('show-subcategory',['slug'=>'tablette' ,'language' => Request()->language]) }}">{{ __('Tablette tactile') }}</a> 
                        </div>
                        <div class="col ">
                         
                          <a href="{{ route('show-subcategory',['slug'=>'accessoire-telephone' ,'language' => Request()->language]) }}"> {{ __('Accessoire téléphone') }}</a> 
                        </div>
                      </div>
        
                    </div>
                  
                </li>
                <li class="dropdown-l2 position-relative">
                  <a class="dropdown-item" href="{{ route('show-category', ['slug'=>'infomatique','language' => Request()->language]) }}" >
                    <i class='mdi mdi-desktop-classic text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
                    {{ __('Informatique') }}</a>
                  <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} 
                      dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <div class="row row-cols-12 row-cols-md-2">
                        <div class="col">
                          <a href="{{ route('show-subcategory',['slug'=>'laptop' ,'language' => Request()->language]) }}">{{ __('Ordinateur portable') }}</a> 
                        </div>
                        <div class="col">
                          <a href="{{ route('show-subcategory',['slug'=>'desktop' ,'language' => Request()->language]) }}"> {{ __('Ordinateur de bureau') }}</a> 
                        </div>
                        <div class="col">
                          <a href="{{ route('show-subcategory',['slug'=>'accessoire-info' ,'language' => Request()->language]) }}"> {{ __('Accessoires informatique') }}</a> 
                        </div>
                      </div>
                  </ul>
                
                </li>
                <li class="dropdown-l2 position-relative">
                  <a class="dropdown-item" href="{{ route('show-category', ['slug'=>'multimedia','language' => Request()->language]) }}" >
                    <i class='mdi mdi-play-network text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
                    {{ __('Multimédia') }}</a>
                  <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="row row-cols-12 row-cols-md-2">
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'televiseur' ,'language' => Request()->language]) }}">{{ __('Televiseur') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'video-projecteur' ,'language' => Request()->language]) }}"> {{ __('Video-projecteur') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'appareil-photo' ,'language' => Request()->language]) }}"> {{ __('Appareil photo') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'console-jeux' ,'language' => Request()->language]) }}">{{ __('Console de jeux') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'son' ,'language' => Request()->language]) }}">{{ __('Audio et son') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'recepteur' ,'language' => Request()->language]) }}">{{ __('Recepteur') }}</a> 
                      </div>
                    </div>
                  </ul>
                </li>
                <li class="dropdown-l2 position-relative">
                  <a class="dropdown-item" href="{{ route('show-category', ['slug'=>'stockage','language' => Request()->language]) }}" >
                    <i class='mdi mdi-content-save-settings text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
                    {{ __('Stockage') }}</a>
                  <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="row row-cols-12 row-cols-md-2">
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'disque-interne' ,'language' => Request()->language]) }}"> {{ __('Disque interne') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'disque-dur-externe' ,'language' => Request()->language]) }}">{{ __('Disque dur externe') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'cle-usb' ,'language' => Request()->language]) }}"> {{ __('Cle usb') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'carte-memoire' ,'language' => Request()->language]) }}">{{ __('Carte memoire') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'cd-et-dvd' ,'language' => Request()->language]) }}">{{ __('Cd et dvd') }}</a> 
                      </div>
                    
                    </div>
                  </ul>
                </li>
                <li class="dropdown-l2 position-relative">
                  <a class="dropdown-item" href="{{ route('show-category', ['slug'=>'securite','language' => Request()->language]) }}" >
                    <i class='mdi mdi-camera-lock text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>
                    {{ __('Securite') }}</a>
                  <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="row row-cols-12 row-cols-md-2">
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'camera-de-surveillence' ,'language' => Request()->language]) }}"> {{ __('Camera de surveillence') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'sys-alarme' ,'language' => Request()->language]) }}"> {{ __('Systeme d\'alarme') }}</a> 
                      </div>
                      <div class="col">
                        <a href="{{ route('show-subcategory',['slug'=>'onduleurs' ,'language' => Request()->language]) }}">{{ __('Onduleurs') }}</a> 
                      </div>
                      
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
            <input type="text" class="form-control border border-1 border-warning" placeholder="Recherche" 
            aria-label="Recherche" aria-describedby="button-addon2">
            <a href='#' class="btn " type="button" id="button-addon2" style="background-color: #fd8617"><i class='mdi mdi-magnify fs-5 text-white'></i></a>
          </div>
       </form>
     
      </div>
      <div class="col-md-2  d-flex justify-content-between justify-md-content-end align-items-center">
        <a class="btn btn-light d-md-none d-inline-block mt-1" style='background:rgb(233, 240, 246);' data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <i class='mdi mdi-menu  text-dark fs-5'></i>
        </a>
        <div class="d-inline-block mt-3 mt-md-0 ">
         
          
          <wish-list></wish-list>
          <cart-count></cart-count>
          <account-auth></account-auth>
          <cart-sidebar></cart-sidebar>
         
       

        </div>
        
      </div>
    </div>
 
  </div>  {{-- flexbox-menu --}}
  {{-- <nav class="second-navbar">
    <div class="container  ">
      <div class="mx-auto d-flex justify-content-center align-items-center">

        <a class="text-decoration-none text-secondary me-2" href="#">
          compte
        </a>
        <a class="text-decoration-none text-secondary me-2" href="#">
          compte
        </a>
        <a class="text-decoration-none text-secondary me-2" href="#">
          compte
        </a>
        <a class="text-decoration-none text-secondary me-2" href="#">
          compte
        </a>
      </div>
    </div>
  </nav> --}}

  </nav>
  
<nav class="navbar-under"></nav>

  <div class="offcanvas {{ App::getLocale() === 'ar' ? 'offcanvas-end' : 'offcanvas-start '}}" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      
    </div>
  </div>

