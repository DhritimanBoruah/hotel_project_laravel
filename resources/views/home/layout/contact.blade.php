@include('home.layout.message')

<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form action="{{url('message')}}" method="post" id="request" class="main_form">
               @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name" type="text" name="name"
                      @if (Auth::id())
                         value="{{Auth::user()->name}}"
                     @endif
                     > 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="email" name="email"
                      @if (Auth::id())
                         value="{{Auth::user()->email}}"
                     @endif
                     > 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone Number" type="text" name="phone" maxlength="10"
                      @if (Auth::id())
                         value="{{Auth::user()->phone}}"
                     @endif
                     >                          
                   </div>
                   <div class="col-md-12">
                     <textarea name="message" class="textarea" placeholder="Enter your message here..."></textarea>
                 </div>
                   <div class="col-md-12">
                      <button type="submit" class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>