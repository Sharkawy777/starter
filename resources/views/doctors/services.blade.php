@extends('layouts.app')

@section('content')
    <div class="alert-success" id="success_msg" style="display: none">
        Saved Successfully
    </div>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Doctor Services
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($services) && $services-> count()>0)
                        @foreach($services as $service)
                            <tr>
                                <th scope="row">{!! $service -> id !!}</th>
                                <td>{!! $service -> name !!}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <br><br>

                <form method="post" action="{{route('save.doctors.services')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Choose Doctor</label>
                        <select class="form-control" name="doctorId">
                            @if(isset($doctors) && $doctors-> count()>0)
                                @foreach($doctors as $doctor)
                                    <option value="{{$doctor->id}}">
                                        {{$doctor->name}}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Choose Services</label>
                        <select class="form-control" name="servicesId[]" multiple>
                            @if(isset($allServices) && $allServices-> count()>0)
                                @foreach($allServices as $allService)

                                    <option value="{{$allService->id}}">
                                        {{$allService->name}}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Services</button>
                </form>

            </div>
        </div>

    </div>
@stop
