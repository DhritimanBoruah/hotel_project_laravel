<!DOCTYPE html>
<html lang="en">
   <head>
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
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         @include('home.layout.banner')
      </section>
      <!-- end banner -->

      <!-- about -->
      @include('home.layout.about')
      <!-- end about -->

      <!-- our_room -->
      @include('home.layout.room')
      <!-- end our_room -->

      <!-- gallery -->
      @include('home.layout.gallery')
      <!-- end gallery -->

      <!-- blog -->
      @include('home.layout.blog')
      <!-- end blog -->
 
      <!--  contact -->
      @include('home.layout.contact')

      <!-- end contact -->
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