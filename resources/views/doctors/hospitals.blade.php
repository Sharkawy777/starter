@extends('layouts.app')

@section('content')
    <div class="alert-success" id="success_msg" style="display: none">
        Saved Successfully
    </div>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hospitals
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($hospitals) && $hospitals-> count()>0)
                        @foreach($hospitals as $hospital)
                        <tr>
                            <th scope="row">1</th>
                            <td>{!! $hospital -> name !!}</td>
                            <td>{!! $hospital -> address !!}</td>
                            <td>
                                <a href="{{Route('hospitals.doctors',$hospital->id)}}" class="btn btn-success">Show Doctors</a>
                                <a href="{{Route('hospital.delete',$hospital->id)}}" class="btn btn-danger">Delete Hospital</a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop
