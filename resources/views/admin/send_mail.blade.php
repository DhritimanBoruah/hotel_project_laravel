<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.layout.style')
  </head>

  <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }

        .div_deg{
            padding-top: 20px;
        }
        .div_deg button{
            width: 30%;
        }

        .div_center{
            text-align: center;
            padding-top: 40px;
        }


    </style>

  <body>
     
      @include('admin.layout.header')

      @include('admin.layout.sidebar')

      @include('admin.layout.message')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>
                <h1 style="font-size: 30px;font-weight:bold;">Mail send to {{$data->name}}</h1>
            </center>

            <div class="div_center">
                <form action="{{url('mail',$data->id)}}" method="post">
                    @csrf
                    <div class="div_deg">
                        <label for="greeting">Greeting</label>
                        <input type="text" name="greeting" id="">
                    </div>
                    <div class="div_deg">
                        <label for="mail_body">Mail Body</label>
                        <input type="text" name="mail_body" id="">
                    </div>
                    <div class="div_deg">
                        <label for="action_text">Action Text</label>
                        <input type="text" name="action_text" id="">
                    </div>
                    <div class="div_deg">
                        <label for="action_url">Action Url</label>
                        <input type="text" name="action_url" id="">
                    </div>
                    <div class="div_deg">
                        <label for="end_line">End Line</label>
                        <input type="text" name="end_line" id="">
                    </div>
                    <div class="div_deg">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
     </div>

      @include('admin.layout.footer')

</body>
</html>