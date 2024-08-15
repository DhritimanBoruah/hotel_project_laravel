<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
@include('home.layout.style')      
</head>
   <!-- body -->
   <body class="main-layout">
      
      <header> 
         @include('home.layout.header')
      </header>

      

      <div>
         @include('home.layout.contact')
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