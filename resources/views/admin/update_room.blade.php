<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.layout.style')
  </head>

  <body>
     
      @include('admin.layout.header')

      
      @include('admin.layout.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 style="text-align: center;font-size:3rem;font-weight:bold;color:white;padding-bottom:20px;">Update Room</h1>

            <form action="{{url('edit_room',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                <label for="room_title" class="form-label">Room Title</label>
                <input type="text" class="form-control" name="room_title" value="{{$data->room_title}}">
                </div>
                <div class="mb-3">
                <label for="room_price" class="form-label">Room Price</label>
                <input type="text" class="form-control" name="room_price" value="{{$data->price}}">
                </div>
                <div class="mb-3">
                <label for="room_description" class="form-label">Room Description</label>
                <textarea class="form-control" name="room_description" rows="3" style="background-color: #FFFFFF; color: #000000;">{{$data->room_title}}</textarea>
                </div>
                <div class="mb-3">
                <label for="room_type" class="form-label" style="padding-right: 5px;">Room Type</label>
                <select class="form-select" name="room_type">
                <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
                </select>
                </div>

                <div class="mb-3">
                <label for="wifi" class="form-label" style="padding-right: 50px;">WiFi</label>
                <select class="form-select" name="wifi">
                <option selectedvalue="{{$data->wifi}}">{{$data->wifi}}</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                </select>
                </div>

                <div class="mb-3">
                <label for="room_image" class="form-label">Room Image</label>
                <input type="file" class="form-control" name="room_image" >
                    @if($data->image)
                        <img src="room/{{$data->image}}" width="100" alt="Current Image">
                    @endif
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('view_room')}}" class="btn btn-info ms-auto" style="margin-left: 10px;">BACK</a>
</form>
                </form>
                
            </div>
        </div>
    </div>
      

      @include('admin.layout.footer')

</body>
</html>

