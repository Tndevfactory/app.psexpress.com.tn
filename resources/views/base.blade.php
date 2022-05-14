
 @php
 $theme = session()->get('theme');
 
@endphp
@php 

 if(session()->get('compta')){
    
     $compta=session()->get('compta');
     if($compta['total_qty']==0){
       $total_qty='';
     }else{
       $total_qty=$compta['total_qty'];
     }
   
     
   }else{
     $total_qty='';
   };

@endphp
@php

//$getQueryString=Request()->fullUrl();
//$getQueryString = Request()->path();
//$getQueryString = Request()->fullUrlWithQuery(['currency' => Request()->currency]);
//$getQueryString = Request()->getQueryString();
// dd($getQueryString); 

$menu_categories = session()->get('menu');

@endphp



<!DOCTYPE html>
   
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
 dir="{{ App::getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
   {{-- default always light class ltr  --}}  
 class="{{ App::getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <head>
          <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ8WZSD3X7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-HJ8WZSD3X7');
    </script>

      <meta name="google-site-verification" content="YFiMm06vQYnYBOup02ruZlmWvsAyhjt_hmxOdZld7UE" />
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ config('app.url') }}">
        <meta name="app-env" content="{{ config('app.env') }}">

        @yield('meta')
        <title>ubei | @yield('title')</title>

      <link rel="icon"  type="image/x-icon" 
      href="{{  asset('favicon.ico')  }}"/>
      
      <link rel="canonical" href="https://ubei.com.tn" />
       
     


        @yield('css')  

        <link rel="stylesheet" href="{{  asset('css/app.css') }}" />
    </head>
{{-- default always light   --}}
    <body  class="light" dir="{{App::getLocale() == 'ar' ? 'rtl': 'ltr'}}">


     @if(app()->environment('production'))
        <div id="fb-root"></div>

        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
        
          var chatbox = document.getElementById('fb-customer-chat');
          chatbox.setAttribute("page_id", "464147727656938");
          chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              xfbml            : true,
              version          : 'v13.0'
            });
          };

          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
      @else

      @endif
 

   
    <div id='app'> {{-- all vue application could be placed in content section --}}

      @if(Request::segment(2) && Request::segment(2) !== 'verify'  && Request::segment(2) !== 'login' && Request::segment(2) !== 'prelude' && Request::segment(2) !== 'reset-password-api')
              @include('components.navbar') 
      @endif

                <div class='container '>
                     @if(session()->get('success'))
                    <div class='  animate__animated animate__fadeOutUp animate__delay-3s alert alert-success fs-6  py-1 text-center' role="alert"> {{  session()->get('success')}}</div>
                    @endif

                    @if(session()->get('fail'))
                    <div class='animate__animated animate__fadeOutUp animate__delay-3s alert alert-danger fs-6  py-1 text-center' role="alert"> {{  session()->get('fail')}}
                    </div>
                    
                    @endif


                    @if ($errors->any())
                        <div class="animate__animated animate__fadeOutUp animate__delay-3s alert alert-danger  py-1 text-center"  role="alert">
                            <ul class=" list-unstyled py-1 m-0">
                                @foreach ($errors->all() as $error)
                                    <li class='fs-6 py-1'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
       

         <main class="main">
         
           <loading-spinner></loading-spinner>
           <error-message  language={{ Request()->language }}></error-message>
           <success-message  language={{ Request()->language }}></success-message>

           @yield('content') 
           

         </main>
             
        
      @if(Request::segment(2)  && Request::segment(2) !== 'login' && Request::segment(2) !== 'verify' && Request::segment(2) !== 'prelude' && Request::segment(2) !== 'reset-password-api')
              @include('components.footer')
      @endif

    </div>   {{-- end vue js zone --}}
       @if(Request::segment(2) && Request::segment(2) !== 'verify' )
         <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
       @endif
        {{-- <div class='cookie  bg-primary ' style='position:fixed; bottom:0px;left:0px;width:100%'></div>  --}}
       
<script>
  // navbar script
  
    let navigationBar = document.querySelector(".navigation-bar");
     
  
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function(e) {
            // print "false" if direction is down and "true" if up
             
  
              console.log(this.oldScroll > this.scrollY);
              
              if(this.oldScroll > this.scrollY){
                console.log('up scroll');
                navigationBar.classList.remove('fixed')
              }else{
                navigationBar.classList.add('fixed')
              }
  
               this.oldScroll = this.scrollY;
            navScroll()
      };
  
      function navScroll() {
   
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         // navigationBar.classList.add('fixed')
          
      } else {
         // navigationBar.classList.remove('fixed')
          
      }
      }
  
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
  // end navbar script
  </script>

<script>

  //scroll to top :
  let mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    
    if (mybutton) {
    
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        // console.log('visible scrolltotop')
      } else {
          mybutton.style.display = "none";
        //  console.log('hidden scrolltotop')
      }
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
//end scroll to top :
</script>
<script>

  //change theme :
  let body = document.querySelector("body");
  let changeTheme = document.querySelector(".change-theme");
  if(changeTheme){
    changeTheme.addEventListener('click', ()=>{
   
   if(body.classList.contains('light')){
    
     body.classList.remove('light');
     body.classList.add('dark');
 
   }else{
   
     body.classList.remove('dark');
     body.classList.add('light');
   }
 })
  }
  
  
  
  </script>

<script>

  
  function myFunction() {
    var x = document.getElementById("stock_filter").value;
    console.log(x);
   
    document.getElementById("stock_form").submit()
  }
  </script>

@yield('js')
     
    
     <script src="{{  asset('js/manifest.js')}}"></script>
     <script src="{{ asset('js/vendor.js')}}"></script>
     <script src="{{ asset('js/app.js')}}"></script>
    
    
    </body>
</html>
