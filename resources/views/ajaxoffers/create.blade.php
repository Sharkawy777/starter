@extends('layouts.app')

@section('content')
    <div class="alert-success" id="success_msg" style="display: none">
        Saved Successfully
    </div>
    <div class="container">
        <div class="flex-center position-ref full-height">
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

            <div class="content">
                <div class="title m-b-md">
                    Add your offer!
                </div>
                {{--        another way :: give the route:: get name and pass it here--}}
                {{--        <form method="post" action="{{url('offers\store')}}">--}}

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <br>
                <form method="post"  id="offerForm" action="" enctype="multipart/form-data">

                    {{--            <input name="_token" value="{{csrf_token()}}">--}}
                    @csrf

                    <div class="form-group">
                        <label for="">Offer photo</label>
                        <input type="file" class="form-control" name="photo">
                        @error('photo')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Offer Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                               placeholder="Name">
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Offer price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price">
                        @error('price')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Offer Details</label>
                        <input type="text" class="form-control" name="details" placeholder="Details">
                        @error('details')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <button id="save_offer" class="btn btn-primary">Save Offer</button>
                </form>
            </div>
        </div>

    </div>
@stop
@section('scripts')
    <script>
        $(document).on('click', '#save_offer', function (e) {
            e.preventDefault();
            const formData = new FormData($('#offerForm')[0]);
            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{Route('ajax.offers.store')}}",
                data:formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.status == true)
                        // alert(data.msg)
                        $('#success_msg').show();
                }, error: function (reject) {
                }
            })
        })
    </script>
@stop
