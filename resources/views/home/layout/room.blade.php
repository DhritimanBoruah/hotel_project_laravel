<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Room</h2>
                <p>Lorem Ipsum available, but the majority have suffered </p>
             </div>
          </div>
       </div>
       <div class="row">
         @foreach ($room as $room)
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

