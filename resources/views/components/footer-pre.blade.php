
<footer class="footer-pre pt-5" >
  <div class="container">
    
    <div class="row ">
      <div class="col-6 col-md-3  mb-3 d-flex flex-column  justify-content-center align-items-center px-5">
        <img src="{{
        asset('/media/png/delivery.png')}}"  alt="logo UBEI" style='height:35px;width:35px'>
          <span class="value-text  mt-3 text-center" >Livraison gratuite à partir de 300DT</span>
      </div>
      <div class="col-6 col-md-3 mb-3 d-flex flex-column  justify-content-center align-items-center px-5">
        <img src="{{ 
        asset('/media/png/Genuine.png')}}"  alt="logo UBEI" style='height:35px;width:35px'>
          <span class="value-text mt-3 text-center">Garantie 1 ans</span>
      </div>
      <div class="col-6 col-md-3 mb-3 d-flex flex-column  justify-content-center align-items-center px-5">
        <img src="{{ 
        asset('/media/png/services.png')}}"  alt="logo UBEI" style='height:35px;width:35px'>
          <span class="value-text  mt-3 text-center">Service après-vente 7/7</span>
      </div>
      <div class="col-6 col-md-3 mb-3 d-flex flex-column  justify-content-center align-items-center px-5">
        <img src="{{
        asset('/media/png/money.png')}}"  alt="logo UBEI" style='height:35px;width:35px'>
          <span class="value-text  mt-3 text-center">Paiement à la livraison, En ligne</span>
      </div>
     
    </div>

    {{-- <div class="row ">
      <div class="col-12 col-md-3  mb-3 mb-md-0">
        <div class="d-flex justify-content-start">
          <img src="{{ app()->environment('production') ? asset('public/media/logo/newlogoUBEI.jpg') : asset('/media/logo/newlogoUBEI.jpg')}}"
           alt="logo UBEI" style='height:40px;width:40px;border-radius:50%;vertical-align:middle'>
           <h4 class="d-inline-block text-capitalize h3 mx-1" style='color:rgb(241, 160, 9)'> UBEI</h4>
        </div>
        <div class="info mt-2 ">
        <span class="mdi mdi-cellphone-wireless d-block"> <a href="tel:+21655385666"  target="_blank" class="info-link text-decoration-none text-white"> +21655385666</a></span> 
        <span class="mdi mdi-email-plus-outline d-block"> <a href="mailto:team@UBEI.com.tn"  target="_blank" class="info-link  text-decoration-none text-white"> team@UBEI.com.tn</a></span>
        <span class="mdi mdi-google-maps d-block "> 
          <a href=" https://www.google.tn/maps/place/UBEI/@36.8519697,10.2654375,17z/data=!3m1!4b1!4m5!3m4!1s0x12e2b5856ff17ecb:0x703b88463328308!8m2!3d36.8519697!4d10.2676262
          "   target="_blank" class=" info-link text-decoration-none text-white"> Immeuble El Mesk Bloc C-C14, 1073 Montplaisir</a> </span> 
        </div>
        <div class="social mt-2  d-flex justify-content-center">
          <a href="#">
          <img src="{{ app()->environment('production') ? 
          asset('public/media/ui/social-media/facebook.png') : asset('/media/ui/social-media/facebook.png')}}"
           alt="logo UBEI" style='height:35px;width:35px'>
          </a>
          <a href="#">
           <img class="mx-4"  src="{{ app()->environment('production') ? asset('public/media/ui/social-media/instagram.png') : 
           asset('/media/ui/social-media/instagram.png')}}"
           alt="logo UBEI" style='height:35px;width:35px'>
          </a>
          <a href="#">
           <img src="{{ app()->environment('production') ? asset('public/media/ui/social-media/youtube.png') :
            asset('/media/ui/social-media/youtube.png')}}"
           alt="logo UBEI" style='height:35px;width:35px'>
          </a>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div class=" "> 
          <ul class="list-unstyled">
            <li><a href="#" class="h5 footer-list-header text-decoration-none">Produits</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Nouveaux</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Populaires</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Plus vendus</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Mieux notés</a></li>
            
          
          </ul>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div> 
          <ul class="list-unstyled">
            <li><a href="#" class="h5 footer-list-header text-decoration-none">Compte</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Liste souhaits</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Suivis commandes</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Tickets support</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div> 
          <ul class="list-unstyled">
            <li><a href="#" class="h5 footer-list-header text-decoration-none">Entreprise</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>Contact</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>CGV</a></li>
            <li><a href="#" class="footer-list-link"><i class='mdi {{ App::getLocale()==='ar' ? 'mdi-chevron-left':'mdi-chevron-right'}}'></i>FAQ</a></li>
            
          </ul>
        </div>
      </div>
     
    </div> --}}
    <div class="row copyright">
      <div class="col d-flex justify-content-center">
       <a href="" class="text-decoration-none" style='font-size:0.8rem;color:rgb(105, 200, 9)'>&copy; Copyright 2022 tndev-art</a> 
      </div>
      
    </div>
    
  </div> 
</footer>