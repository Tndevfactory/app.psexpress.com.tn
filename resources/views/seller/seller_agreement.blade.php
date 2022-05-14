@extends('base')

@section('meta')
 <meta name="author" content="ch">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base-url" content="{{ config('app.url') }}">

 
@endsection

@section('title', 'seller_contract')

@section('content')

<div class="container">



  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
      <li class="breadcrumb-item active" aria-current="page">Agreement</li>
    </ol>
  </nav>

 


  <div class="mt-4">
     <h3>Accord de vendre sur Ubei</h3> 
    <p>

      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, exercitationem aut adipisci non temporibus consequatur pariatur, alias rem accusantium amet ad dignissimos obcaecati reiciendis blanditiis nemo quos magnam voluptate soluta!
    </p>
     
    <h3>Les conditions generales</h3> 
    <p>

      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, exercitationem aut adipisci non temporibus consequatur pariatur, alias rem accusantium amet ad dignissimos obcaecati reiciendis blanditiis nemo quos magnam voluptate soluta!
    </p>

    <form class="mb-5">
     
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">En cochant cette case, je declare etre constent</label>
      </div>
      <button type="submit" class="btn btn-primary">Accepter</button>
    </form>
    
  </div>
  <div class="mb-3">

    @include('components.products.cta')
  </div>

</div>
  
@endsection

