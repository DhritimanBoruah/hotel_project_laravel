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
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Phone</th>
                            <th scope="col" class="text-center">Message</th>
                            <th scope="col" class="text-center">Send Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <td class="text-center">{{$data->name}}</td>
                            <td class="text-center">{{$data->email}}</td>
                            <td class="text-center">{{$data->phone}}</td>
                            <td class="text-center">{{$data->message}}</td>
                            <td>
                                <a href="{{url('send_mail',$data->id)}}" class="btn btn-success">send mail</a>
                            </td>
                            {{-- <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#messageModal{{$loop->iteration}}" data-message="{{$data->message}}">
                                    View
                                </button>
                            </td> --}}
                        </tr>
                            <!-- Modal -->
                            {{-- <div class="modal fade" id="messageModal{{$loop->iteration}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">{{$data->email}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="message-content{{$loop->iteration}}"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.layout.footer')

    <script>
        @foreach ($data as $data)
            $('#messageModal{{$loop->iteration}}').on('show.bs.modal', function(event) {
                var message = $(event.relatedTarget).data('message');
                $(this).find('#message-content{{$loop->iteration}}').text(message);
            });
        @endforeach
    </script>
</body>
</html>