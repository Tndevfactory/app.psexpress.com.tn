
@extends('base')

@section('meta')
 <meta name="author" content="ch">


@endsection

@section('title', 'paiement')


@section('content')


<div class=' container login-init8 my-5' style="min-height:100vh">
  <pay-ops language={{Request()->language}} ></pay-ops> 
</div>


@endsection
