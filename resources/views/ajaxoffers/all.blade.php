@extends('layouts.app')

@section('content')
    <div class="alert-success" id="success_msg" style="display: none">
        Deleted Successfully
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Offer Name</th>
            <th scope="col">Offer Price</th>
            <th scope="col">Offer Details</th>
            <th scope="col">Offer Photo</th>
            <th scope="col">Operation</th>

        </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr class="offerRow{{$offer -> id}}">
                <th scope="row">{{$offer -> id}}</th>
                <td>{{$offer -> name}}</td>
                <td>{{$offer -> price}}</td>
                <td>{{$offer -> details}}</td>
                <td><img style="width: 90px; height: 90px;" alt="" src="{{asset('/image/offers/'.$offer -> photo)}}"></td>
                <td><a href="{{url('offers/edit/'.$offer -> id)}}" offer_id="{{$offer -> id}}" class="btn btn-success">Update</a></td>
                <td><a href="{{route('ajax.offers.edit',$offer -> id)}}" class="btn btn-success">Update ajax</a></td>
                <td><a href="{{url('offers/delete/'.$offer -> id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="" offer_id="{{$offer -> id}}" class="delete_btn btn btn-danger">Delete ajax</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>

@stop

@section('scripts')
    <script>
        $(document).on('click', '.delete_btn', function (e) {
            e.preventDefault();
            let offer_id = $(this).attr('offer_id');
            $.ajax({
                type: 'post',
                url: "{{Route('ajax.offers.delete')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    'id': offer_id
                },
                success: function (data) {
                    if (data.status == true) {
                        // alert(data.msg)
                        $('#success_msg').show();
                        $('.offerRow' + data.id).remove();
                    }

                }, error: function (reject) {
                }
            })
        })
    </script>
@stop
