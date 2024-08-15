<div>
    @if (session()->has('message'))
        <li style="color:rgb(60, 0, 255);" class="alert alert-success">{{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert">x</button>
        </li>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="color:red;" class="alert alert-danger">{{ $error }}
                <button type="button" class="close" data-dismiss="alert">x</button>
            </li>
        @endforeach
    @endif
</div>
