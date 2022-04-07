
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


<style>


</style>
{{-- arabic style --}}
@if (App::getLocale() == 'ar')
    
    <style>
    .container {
       direction: rtl;
       
    }
    </style>

   @endif

{{-- login-init--}}
<style>
 .verify-screen {
  overflow: hidden;
  display:grid;
  place-items: center;
  padding: 0px 5rem;
  height:100vh;
  width:100%;
  color:white;
  
  }


  @media only screen and (max-width: 600px) {
    .verify-screen {
        overflow: auto;
        overflow-x: hidden;
        /* display:block; */
        padding:0px 17px
        }
      }

</style>

@endsection


@section('content')

{{-- <h1>{{Request()->verifyToken}}</h1> --}}
@php
$t=Request()->verifyToken;
// echo $t;
@endphp
<div class=' container verify-screen px-md-5' >

  

  <verify-ops language={{Request()->language}}  verify-token={{$t}} ></verify-ops> 
</div>



@endsection



@section('js')

<script>
let categorieTitle=document.querySelector('.container')
// gsap.to(categorieTitle,{x:3, repeat:-1, 
</script>

@endsection