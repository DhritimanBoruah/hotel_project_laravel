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
            <center><h1>BOOKINGS</h1></center>
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Arrival Date</th>
                    <th scope="col">Leaving Date</th>
                    <th scope="col">Room Title</th>
                    <th scope="col">Room Price</th>
                    <th scope="col">Room image</th>
                    
                    <th scope="col">Action</th>
                    <th colspan="2">Status Update</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($booked as $data)

                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$data->room_id}}</td>
                    <td>{{$data->name }}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>
                        @if ($data->status == 'approved')
                            <span style="color: skyblue">Approved</span>
                        @endif
                        @if ($data->status == 'waiting')
                            <span style="color: yellow">Waiting</span>
                        @endif
                        @if ($data->status == 'rejected')
                            <span style="color: Red">Rejected</span>
                        @endif
                    </td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->end_date}}</td>
                    <td>{{$data->room->room_title}}</td>
                    <td>{{$data->room->price}}</td>
                    <td>
                        <img src="room/{{$data->room->image}}" width="200px" alt="" >
                    </td>
                    <td>
                        <a href="{{url('delete_booking',$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this?')"> Delete</a>
                    </td>
                    <td>
                        <span style="text-allign:center">
                            <a class="btn btn-success w-100" href="{{url('approve_status',$data->id)}}">Approve</a>
                        </span>
                        
                        <br>
                        <a class="btn btn-warning w-100" href="{{url('reject_status',$data->id)}}" >Reject</a>
                    </td>
                    
                    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
          </div>
        </div>
      </div>


      @include('admin.layout.footer')

</body>
</html>