<div class="d-flex align-items-stretch">
  <nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">{{Auth::user()->name}}</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    
    <ul class="list-unstyled">
      <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{url('home')}}"> 
          <i class="fa fa-home"></i> Home 
      </a></li>
      <li class="{{ request()->is('create_room') || request()->is('view_room') ? 'active' : '' }}">
          <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
              <i class="fa fa-bed"></i> Room dropdown 
          </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{url('create_room')}}"> 
                  <i class="fa fa-plus"></i> Add Room 
              </a></li>
              <li><a href="{{url('view_room')}}"> 
                  <i class="fa fa-list"></i> View Room 
              </a></li>
          </ul>
      </li>
      <li class="{{ request()->is('bookings') ? 'active' : '' }}"><a href="{{url('bookings')}}"> 
          <i class="fa fa-book"></i> Booking 
      </a></li>
      <li class="{{ request()->is('add_gallery') ? 'active' : '' }}"><a href="{{url('add_gallery')}}"> 
          <i class="fa fa-image"></i> Gallery 
      </a></li>
      <li class="{{ request()->is('all_messages') ? 'active' : '' }}"><a href="{{url('all_messages')}}"> 
          <i class="fa fa-envelope"></i> Messages 
      </a></li>
  </ul>
  </nav>