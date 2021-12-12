@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert-success" id="success_msg" style="display: none">
            Updated Successfully
        </div>

        <div class="flex-center position-ref full-height">
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
                <form method="post" id="offerFormUpdated" action="" enctype="multipart/form-data">

                    {{--            <input name="_token" value="{{csrf_token()}}">--}}
                    @csrf

                    <div class="form-group">
                        <label for="">Offer photo</label>
                        <input type="file" class="form-control" name="photo">
                        @error('photo')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <input type="text" class="form-control" name="offer_id" value="{{$offer -> id}}"
                           style="display: none">

                    <div class="form-group">
                        <label for="">Offer Name</label>
                        <input type="text" class="form-control" name="name" value="{{$offer -> name}}"
                               aria-describedby="emailHelp"
                               placeholder="Name">
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Offer price</label>
                        <input type="text" class="form-control" name="price" value="{{$offer -> price}}"
                               placeholder="Price">
                        @error('price')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Offer Details</label>
                        <input type="text" class="form-control" name="details" value="{{$offer -> details}}"
                               placeholder="Details">
                        @error('details')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <button id="update_offer" class="btn btn-primary">Update Offer</button>
                </form>
            </div>
        </div>

    </div>
@stop
@section('scripts')
    <script>
        $(document).on('click', '#update_offer', function (e) {
            e.preventDefault();
            const formData = new FormData($('#offerFormUpdated')[0]);
            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{Route('ajax.offers.update')}}",
                data: formData,
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
