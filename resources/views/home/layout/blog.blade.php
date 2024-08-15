<div  class="blog">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Blog</h2>
                <p>Lorem Ipsum available, but the majority have suffered </p>
             </div>
          </div>
       </div>
       
       <div class="row">
         @foreach ($blogRooms as $room)
             <div class="col-md-4">
                 <a href="{{url('room_details',$room->id)}}" style="text-decoration: none; color: inherit;">
                     <div class="blog_box">
                         <div class="blog_img">
                             <figure>
                                 <img src="room/{{$room->image}}" style="height:200px;width:100%;" alt="#"/>
                             </figure>
                         </div>
                         <div class="blog_room">
                             <h3>{{$room->room_title}}</h3>
                             <span>The standard chunk </span>
                             <p>{{Str::limit($room->description,200)}} </p>
                         </div>
                     </div>
                 </a>
             </div>
         @endforeach
     </div>
     
    </div>
 </div>