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
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>GALLERY</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('upload_image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" class="form-control" name="image" id="image-input" required>
                            <img id="image-preview" src="" alt="" style="max-width: 200px; margin-top: 10px;" >
                        </div>
                        <button type="submit" class="btn btn-primary">ADD IMAGE</button>
                        
                    </form>
                </div>
            </div>

    
            
                <div  class="gallery" style="padding-top: 5%">
                    <div class="container">
                        <div  class="gallery">
                            <div class="container">
                               
                               </div>
                               <div class="row p-10">
                                 @foreach ($gallery as $room)
                                 <div class="col-md-3 col-sm-6">
                                    <div class="gallery_img">
                                       <figure>
                                        <img src="gallery/{{$room->image}}" style="height:200px;width:320px;" alt="#"/>
                                        <a href="{{url('delete__gal_img',$room->id)}}" onclick="return confirm('Do you really want to delete?')" class="btn btn-danger">Delete</a>
                                    </figure>
                                    </div>
                                 </div>
                                 @endforeach
                                  
                               </div>
                            </div>
                         </div>
                    </div>
            </div>

          </div>
        </div>
      </div>
      

      @include('admin.layout.footer')


      {{-- for image preview --}}

      <script>
        document.getElementById('image-input').onchange = function (e) {
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('image-preview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        };
    </script>

</body>
</html>