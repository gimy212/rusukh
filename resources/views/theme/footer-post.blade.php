


<!-- footer -->
<footer>
    <!-- main footer -->
    <div class="footer-section bg-secondary">
      <div class="container">
        @foreach($allcontents as $item)
        <div class="row justify-content-between">
          <!-- footer content -->
          <div class="col-lg-5 mb-5 mb-lg-0">
            <!-- logo -->
            <a href="https://rusukh.com.sa" class="brand"><img class="logo-alt" src="{{asset('images/2.webp')}}" alt="Rusukh" srcset=""></a>



            <p class="text-light mb-5">

          {{$item->footer_bio}}
 </p>



          </div>
          <div class="col-lg-6">
            <div class="row">
              <!-- service list -->
<div class="col-6 mb-5">
    <h4 class="text-white mb-4">sections</h4>
    <ul class="">
      <li class="mb-3 text-light"><a class="text-light d-block" href="https://rusukh.com.sa/category/28">  seawater desalination plant

</a></li>
      <li class="mb-3 text-light"><a class="text-light d-block" href="https://rusukh.com.sa/category/21">Fog Systems
    </a></li>
      <li class="mb-3 text-light"><a class="text-light d-block" href="https://rusukh.com.sa/post/grease-interceptor"> grease interceptor </a></li>
      <li class="mb-3 text-light"><a class="text-light d-block" href="https://rusukh.com.sa/post/gray-water-treatment2">  Gray water treatment</a></li>
      <li class="mb-3 text-light"><a class="text-light d-block" href="https://rusukh.com.sa/category/26"> Wells desalination plants 
</a></li>


    </ul>
  </div>
              <!-- contact info -->
              <div class="col-6 mb-5">
                <h4 class="text-white mb-4">contact us </h4>
                <ul class="list-unstyled">
                  <li class="text-light mb-3">
                    {{$item->address}} </li>
                  <li class="text-light mb-3">
                    <a class="text-white" href="tel:+966533850888"> {{$item->number}} </a>

                  </li>
                  <li class="text-light mb-3"> {{$item->email}} </li>
                </ul>
                     <a  href="http://discovery.ariba.com/profile/AN11059408155">
<img style="width:180px; height:55px;" alt="View Rusukh Specilaized Company profile on Ariba Discovery" border=0 src="https://service.ariba.com/an/p/Ariba/badge_180x55.jpg">
</a> 
              </div>

          </div>
        </div>

      </div>

      @endforeach

    </div>

    <div class="container-certifcate" >

       <!-- certifcate -->
    

        <img src="https://rusukh.com.sa/images/about/12.png" alt="">
        <img src="https://rusukh.com.sa/images/about/13.png" alt="">
        <img src="https://rusukh.com.sa/images/about/14.png" alt="">
        <img src="https://rusukh.com.sa/images/about/152.png" alt="">





        <img src="https://rusukh.com.sa/images/about/logo-pa.webp" alt="">



      
        <img src="https://rusukh.com.sa/images/about/logob1.webp" alt="">
        <img src="https://rusukh.com.sa/images/about/logoa2 (3).png" alt="">
          <img style="    width: fit-content;" src="https://rusukh.com.sa/images/about/saudi.avif" alt="">




    </div>
    <!-- copyright -->
    <div class="bg-secondary-darken py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="mb-0 text-white"><span class="text-primary">Rusukh  </span> &copy; 2022    </p>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <ul class="list-inline">
              <li class="list-inline-item mx-0"><a class="d-inline-block px-3 text-white border-right" href="terms-conditions.html"> terms of conditions </a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block px-3 text-white" href="privacy-policy.html">privacy policy </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
    <!-- whatsapp -->


    <div class="whatsnline">


      <div style="   direction: ltr; text-align: left;" id='whatsapp-chat' class='hide'>
        <div class='header-chat'>
          <div class='head-home'>
            <div style="background-color: #fff;" class='info-avatar'><img src='/images/logo.png' /></div>
            <p><span style="color: #fff;"  class="whatsapp-name"> رسوخ </span><br><small>Typically replies within minutes </small></p>

          </div>
          <div class='get-new hide'>
            <div id='get-label'></div>
            <div id='get-nama'></div>
          </div>
        </div>
        <div class='home-chat'>

        </div>
        <div class='start-chat'>
          <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
            <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
              <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
                <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
                  <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
                  <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
                  <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
                </div>
              </div>
              <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
                <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Rusukh </div>
                <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">hello  <br><br>  how can we help you?</div>
                <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>
              </div>
            </div>
          </div>

          <div class='blanter-msg'>
            <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
            <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

          </div>
        </div>
        <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
      </div>
      <a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg>     contact us  </a>

    </div>
      <!-- ed -->
  <!-- /footer -->
  <!-- jQuery -->
  <script src="{{ asset('plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- slick slider -->
  <script src="{{ asset('plugins/slick/slick.min.js')}}"></script>
  <!-- aos -->
  <!--<script src="{{ asset('plugins/aos/aos.js')}}"></script>-->
  <!-- venobox popup -->
  <script src="{{ asset('plugins/venobox/venobox.min.js')}}"></script>
  <!-- Modernizer -->
  <!--<script src="{{ asset('plugins/modernizer/modernizr.min.js')}}"></script>-->
  <!-- filter -->
  <!--<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>-->
  <!-- google map -->
  <!-- <script src="maps/api/js_key_AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ.js"></script>
  <script src="plugins/google-map/gmap.js"></script> -->

  <!-- tiny -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js'></script>
  <!-- menu script  -->
  <script defer src="{{ asset('menu/public/js/script.js')}}"></script>
  <!-- Main Script -->

  <script src="{{ asset('js/script.js?version=20')}}"></script>
  </body>
  </html>
