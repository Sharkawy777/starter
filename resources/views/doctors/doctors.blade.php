@extends('layouts.app')

@section('content')
    <div class="alert-success" id="success_msg" style="display: none">
        Saved Successfully
    </div>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Doctors
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($doctors) && $doctors-> count()>0)
                        @foreach($doctors as $doctor)
                            <tr>
                                <th scope="row">1</th>
                                <td>{!! $doctor -> name !!}</td>
                                <td>{!! $doctor -> title !!}</td>
                                <td><a href="{{Route('doctor.services',$doctor->id)}}" class="btn btn-success">Show Services</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop
