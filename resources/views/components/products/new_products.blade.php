<h2 class='mt-4 mb-3 bg-warning text-dark  py-2 text-center text-uppercase fs-5'>  {{ __('Nouvel arrivage') }} </h2>

<div class="row row-cols-2 row-cols-md-5 gx-2 gy-4">


  @foreach ($products as $product)
  <div class="col">
    <div class="card card-product h-100 shadow-sm position-relative">


      <img src="{{ 
     
       asset(isset($product->images[0]->product_image) ? $product->images[0]->product_image : 'media/products/p47.png')}}"
       class="card-img-top" alt="...">

       @if($product->discount != '0')
                  
       <span class="d-flex justify-content-center align-items-center position-absolute  " 
           style='color:white; background-color:rgb(255, 146, 73);font-weight:700;
            text-shadow:1px 1px 1px rgba(0,0,0,0.2);font-size:0.8rem; height:2rem;width:2rem;border-radius:0%;
            right:0px;top:0px;box-shadow:1px 1px 8px rgba(0,0,0,0.1);' >
         -{{ number_format($product->discount,0,'.',',') }}% 
       </span>

      @endif 

      <div class="px-2 position-relative">
         
          <span class="card-text d-block mt-4 " style='font-size:0.9rem'>
          
             @if(App::getLocale() === 'fr')
              {{ Str::limit($product->fr_description , 20)}}

              @elseif(App::getLocale() === 'en')
                {{ Str::limit($product->en_description , 20)}}
              @else
                {{ Str::limit($product->ar_description , 20)}}
              @endif 

          </span>

         

          <div class='price'>
                 
            
                  <table class="table_desktop table  table-borderless d-none d-md-block" style='width:10rem;font-size:0.8rem'>
                    <thead style='font-size:0.8rem' class="table-white" style='width:10rem;font-size:0.8rem' >
                      <tr>
                        <th scope="col" class=" text-center">1..{{ number_format($product->seuil0,0,',',' ') }}</th>
                        <th scope="col" class=" text-center" >{{ number_format($product->seuil1,0,',',' ') }}..{{ number_format($product->seuil2,0,',',' ') }}</th>
                        <th scope="col" class=" text-center" >{{ number_format($product->seuil2,0,',',' ') }}++</th>
                      </tr>
                    </thead>
                    <tbody style='font-size:0.8rem'>
                      <tr>
                      
                        <td class="text-nowrap">{{ number_format($product->price_seuil0,3,',',' ') }}</td>
                        <td class="text-nowrap">{{ number_format($product->price_seuil1,3,',',' ') }}</td>
                        <td class="text-nowrap text-success">{{ number_format($product->price_seuil2,3,',',' ') }}</td>
                      </tr>
                    
                    </tbody>
                  </table>

                  <table class="table_mobile table table-bordered  d-md-none" style='width:100%;font-size:0.8rem'>
                   
                    <tbody style='font-size:0.8rem'>
                      <tr>
                        <th scope="col">0..{{ number_format($product->seuil0,0,',',' ') }}</th>
                        <td>{{ number_format($product->price_seuil0,3,',',' ') }}</td>
                        
                      </tr>
                      <tr>
                        <th scope="col">{{ number_format($product->seuil0,0,',',' ') }}..{{ number_format($product->seuil1,0,',',' ') }}</th>
                        <td>{{ number_format($product->price_seuil1,3,',',' ') }}</td>
                        
                      </tr>
                      <tr>
                        <th scope="col">{{ number_format($product->seuil2,0,',',' ') }}..&infin;</th>
                        <td>{{ number_format($product->price_seuil2,3,',',' ') }}</td>
                        
                      </tr>
                    
                    </tbody>
                  </table>
            </div>             {{-- end price --}}


            <div class='buy-button-div-mobile  d-md-none d-flex justify-content-between bg-white' >
                
              <a href='#'  class=' btn btn-outline-primary ' title='more detail' ><i class='mdi mdi-eye'></i></a>
        
              <add-to-cart language={{ Request()->language }} product-id={{ $product->id }}></add-to-cart> 
        
              <a href='#'  class=' btn btn-outline-danger  9buy-button-link' title='add to wish list' ><i class=' mdi mdi-cards-heart'></i></a>
           
          </div>
    
      

          <div class='buy-button-div d-none d-md-flex bg-white' >
                  <a href='{{ route('show-product', ['slug'=> $product->product_slug ,'language' => Request()->language]) }}' 
                     class=' btn btn-outline-primary ' title='more detail' ><i class='mdi mdi-eye'></i></a>
                  <add-to-cart language={{ Request()->language }} product-id={{ $product->id }}></add-to-cart> 
                  <a href='#'  class=' btn btn-outline-danger  9buy-button-link' title='add to wish list' ><i class=' mdi mdi-cards-heart'></i></a>
          </div>
          
      </div>         {{-- end cardbody--}}
     

    </div> {{-- end card --}}
  </div>  {{-- en col --}}
  @endforeach
  
</div>