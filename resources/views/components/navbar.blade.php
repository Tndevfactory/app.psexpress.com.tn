
@php

// engine s

//cache()->flush();
$currency=session()->get('currency');


 cache()->put('currency', $currency );
       
 cache()->put('language', Request()->language);


@endphp

<nav class="header">
  <div class="container px-3 d-flex justify-content-between align-items-center  ">

    <div class="info">
      <p>
        cepturi reprehenderit tempora asperiores, veritatis minus consequuntur consequatur accusamus recusandae!
        cepturi reprehenderit tempora asperiores,
      </p>
    </div>
     
     <div class="config ">
      
       <a href="#" class="d-none d-md-inline-block mx-2">
         <i class='mdi mdi-alarm-light-outline fs-5  '></i>
       </a>

      <ul class="d-inline-block  d-none d-md-inline-block">
   
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
          <img src="{{ app()->environment('production') ? asset('public/media/logo/newlogopsexpress.jpg') : asset('/media/logo/newlogopsexpress.jpg')}}"
           alt="logo psexpress" style='height:35px;width:35px'>
          <h4 class="d-inline-block text-capitalize" style='color:orange'>psexpress</h4>
        </div>
      </div>
      <div class="col-md-8 ">

        <form>
          <div class="input-group  search-bar mx-auto ">
            <div class="dropdown d-none d-md-inline-block  {{ App::getLocale() === 'ar' ? 'ms-md-2 ' : 'me-md-2 '}} ">
              <button class="btn btn-light  dropdown-toggle"  style='background:rgb(233, 240, 246);' type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               <i class='mdi mdi-menu mx-1 fs-5'></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="{{ App::getLocale() === 'ar' ? 'text-align:right; direction: rtl' : 'text-align:left; direction: ltr'}}">
                <li class="dropdown-l2 position-relative" >
                  <a class="dropdown-item" href="#" style='font-size:0.9rem; '>
                    <i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2 ' : 'me-2'}} '></i>Phone</a>
                  
                    <div class="container bg-danger dropdown-l3
                     {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} 
                    dropdown-menu">
                      <div class="row">
                        <div class="col bg-warning">
                          Column
                        </div>
                        <div class="col bg-light">
                          Column
                        </div>
                        <div class="col ">
                          Column
                        </div>
                      </div>
        
                    </div>
                  
                </li>
                <li class="dropdown-l2 position-relative">
                  <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Phone</a>
                  <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <div class="row">
                        <div class="col">
                          Column
                        </div>
                        <div class="col">
                          Column
                        </div>
                        <div class="col">
                          Column
                        </div>
                      </div>
                  </ul>
                
                </li>
                <li class="dropdown-l2 position-relative">
                  <a class="dropdown-item" href="#" style='font-size:0.9rem'><i class='mdi mdi-account-circle text-dark fs-6 {{ App::getLocale() === 'ar' ? 'ms-2' : 'me-2'}} '></i>Phone</a>
                  <ul class=" dropdown-l3 {{ App::getLocale() === 'ar' ? 'dropdown-l3-rtl' : 'dropdown-l3-ltr'}} dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="row">
                      <div class="col">
                        Column
                      </div>
                      <div class="col">
                        Column
                      </div>
                      <div class="col">
                        Column
                      </div>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
            <input type="text" class="form-control border border-1 border-warning" placeholder="Recherche" 
            aria-label="Recherche" aria-describedby="button-addon2">
            <button class="btn btn-warning" type="button" id="button-addon2"><i class='mdi mdi-magnify fs-5 text-white'></i></button>
          </div>
       </form>
     
      </div>
      <div class="col-md-2  d-flex justify-content-between justify-md-content-end align-items-center">
        <a class="btn btn-light d-md-none d-inline-block mt-1" style='background:rgb(233, 240, 246);' data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <i class='mdi mdi-menu  text-dark fs-5'></i>
        </a>
        <div class="d-inline-block mt-3 mt-md-0">
          <a class="text-decoration-none "  href="#">
            <i class='mdi mdi-heart  text-dark fs-4'></i>
          </a>
          <a class="text-decoration-none mx-3"  href="#">
            <i class='mdi mdi-cart text-dark fs-4 '></i>
          </a>
          <div class="dropdown ">
            <a class="text-decoration-none "  href="#" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='mdi mdi-account-circle text-dark fs-4'></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="min-width: 2rem">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
              <li><a class="dropdown-item" href="#">Theme</a></li>
              <li><a class="dropdown-item" href="#">Language</a></li>
            </ul>
          </div>
       

        </div>
        
      </div>
    </div>
 
  </div>  {{-- flexbox-menu --}}
  <nav class="second-navbar">
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
  </nav>
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

