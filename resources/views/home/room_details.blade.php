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

      <div  class="our_room">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                 </div>
              </div>
           </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="serv_hover"  class="room"> 
                        <div class="room_img">
                            <img src="room/{{$room->image}}" style="height:400px;width:100%;" alt="#"/>
                        </div>
                        <div class="bed_room">
                           <h2>{{$room->room_title}}</h2>
                           <p style="padding: 12px;">{{$room->description}} </p>
                           <h4 style="padding: 12px;"><b>Room type: {{$room->room_type}}</b></h4>
                           <h4 style="padding: 12px;"><b>Free Wifi: {{$room->wifi}}</b></h4>
                           <h3 style="padding: 12px;">Price: {{$room->price}}</h3>
                        </div>   
                      </div>
                  </div>

             
             
            <div class="col-md-4" style="padding-left: 10px;">
               <h1>Book Room</h1>

               @include('home.layout.message')

               <form action="{{url('add_booking',$room->id)}}" method="post">
                  @csrf
                  <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" name="name" aria-describedby="" 
                     @if (Auth::id())
                         value="{{Auth::user()->name}}"
                     @endif
                     >
                   </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="" 
                    @if (Auth::id())
                        value="{{Auth::user()->email}}"
                    @endif>
                  </div>
                  <div class="mb-3">
                     <label for="phone" class="form-label">Phone</label>
                     <input type="text" class="form-control" name="phone" aria-describedby="" 
                     @if (Auth::id())
                        value="{{Auth::user()->phone}}"
                     @endif>
                   </div>
                   <div class="mb-3">
                     <label for="start_date" class="form-label">Start Date</label>
                     <input type="date" class="form-control" name="start_date" id="startDate" aria-describedby="">
                   </div>
                   <div class="mb-3">
                     <label for="end_date" class="form-label">End Date</label>
                     <input type="date" class="form-control" name="end_date" id="endDate" aria-describedby="">
                   </div>
                   <div class="mb-3">
                     <input type="submit" class="btn btn-primary" value="Book Room">
                   </div>       
                </form>
             
            </div>  
          </div>   
       </div>
    </div>
 </div>
        
      

      @include('home.layout.footer')
      

      

      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

      <script type="text/javascript">
         $(function(){
       var dtToday = new Date();
    
       var month = dtToday.getMonth() + 1;
   
       var day = dtToday.getDate();
   
       var year = dtToday.getFullYear();
   
       if(month < 10)
           month = '0' + month.toString();
   
       if(day < 10)
        day = '0' + day.toString();
   
       var maxDate = year + '-' + month + '-' + day;
       $('#startDate').attr('min', maxDate);
       $('#endDate').attr('min', maxDate);
   
   });
   </script>




   </body>
</html>