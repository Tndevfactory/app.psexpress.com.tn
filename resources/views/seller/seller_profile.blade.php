@extends('base')

@section('meta')
 <meta name="author" content="ch">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base-url" content="{{ config('app.url') }}">

 
@endsection

@section('title', 'seller_profile')

@section('content')

<div class="container">



  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>

 

  <div class="row">
   <div class="col">
     <h2>seller profile</h2>
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minima quos architecto accusamus eaque necessitatibus, quaerat rem? Animi suscipit in perferendis iure natus nihil eum voluptatibus quia, laborum dolorem vitae!

     <div class="row row-cols-1 row-cols-md-2">
       <div class="col-12 col-md-2">

        <ul class="list-group">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul>

       </div>
       <div class="col-12 col-md-10">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>

       </div>
     </div>
   </div>
  </div>


</div>
  
@endsection

