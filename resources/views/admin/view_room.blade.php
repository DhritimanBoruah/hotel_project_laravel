<!DOCTYPE html>
<html>
  <head> 
    @include('admin.layout.style')
  </head>

  <body>
     
      @include('admin.layout.header')

      
      @include('admin.layout.sidebar')
     
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 style="text-align: center;font-size:3rem;font-weight:bold;color:white;padding-bottom:20px;">View</h1>
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Wifi</th>
                        <th scope="col">Room type</th>
                        <th scope="col">Image</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
    
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$data->room_title}}</td>
                        <td>{{ Str::limit($data->description, 255) }}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->wifi}}</td>
                        <td>{{$data->room_type}}</td>
                        <td><img src="room/{{$data->image}}" width="80" alt=""></td>
                        <td>
                            <a href="{{ url('room_update',$data->id)}}" class="btn btn-warning"> Update</a>
                        </td>
                        <td>
                            <a href="{{ url('room_delete',$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this?')"> Delete</a>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
    </div>

      

      @include('admin.layout.footer')

</body>
</html>