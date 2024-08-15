<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
@include('home.layout.style')      
</head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->
      <header>
        
         @include('home.layout.header')
      </header>

      <div class="about">
        <div class="container-fluid bg-grey">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h2>About Us</h2>
                    <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>
                    <a class="read_more" href="Javascript:void(0)"> Read More</a>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="images/about.png" alt="#"/></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>







      
      <!--  footer -->
      @include('home.layout.footer')
      <!-- end footer -->

      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>