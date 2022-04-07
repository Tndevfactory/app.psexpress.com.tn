
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


@section('content')


<div class=' container login-init px-md-5' >
  <auth-ops language={{Request()->language}} ></auth-ops> 
</div>


@endsection
