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

      <div class="back_re">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="title">
                    <h2>Our Room</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <p  class="margin_0">Lorem Ipsum available, but the majority have suffered </p>
                 </div>
              </div>
           </div>
           <div class="row">
            @foreach ($room_page as $room)
             <div class="col-md-4 col-sm-6">
               <a href="{{url('room_details',$room->id)}}" style="text-decoration: none; color: inherit;">
                <div id="serv_hover"  class="room"> 
                     <div class="room_img">
                         <figure><img src="room/{{$room->image}}" style="height:200px;width:320px;" alt="#"/></figure>
                     </div>
                   <div class="bed_room">
                      <h3>{{$room->room_title}}</h3>
                      <p>{{Str::limit($room->description,100)}} </p>
                   </div>
                </div>
             </div>
             @endforeach
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