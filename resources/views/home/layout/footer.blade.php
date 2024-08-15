<footer>
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class=" col-md-4">
                <h3>Contact US</h3>
                <ul class="conta">
                   <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                   <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                   <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                </ul>
             </div>
             <div class="col-md-4">
                <h3>Menu Link</h3>
                <ul class="link_menu">
                   <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                   <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{url('about')}}"> about</a></li>
                   <li class="{{ request()->is('room_page') ? 'active' : '' }}"><a href="{{url('room_page')}}">Our Room</a></li>
                   <li class="{{ request()->is('gallery_page') ? 'active' : '' }}"><a href="{{url('gallery_page')}}">Gallery</a></li>
                   <li class="{{ request()->is('contact_page') ? 'active' : '' }}"><a href="{{url('contact_page')}}">Contact Us</a></li>
                </ul>
             </div>
             <div class="col-md-4">
                <h3>News letter</h3>
                <form class="bottom_form">
                   <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                   <button class="sub_btn">subscribe</button>
                </form>
                <ul class="social_icon">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="copyright">
          <div class="container">
             <div class="row">
                <div class="col-md-10 offset-md-1">
                   
                   

                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>