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

      <div  class="gallery">
        <div class="container">
            <div  class="gallery">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="titlepage">
                            <h2>gallery</h2>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                     @foreach ($gallery as $room)
                     <div class="col-md-3 col-sm-6">
                        <div class="gallery_img">
                           <figure><img src="gallery/{{$room->image}}" style="height:200px;width:320px;" alt="#"/></figure>
                        </div>
                     </div>
                     @endforeach
                      
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