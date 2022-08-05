@extends('students.layout')
@section('content')

<div class="me-5 ms-5 mt-5">
        <form action="{{url('home/'.$data->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" value="{{$data->id}}" class="form-control"><br>
            User Name:<br>
            <input type="text" name="name" value="{{$data->name}}" class="form-control"><br>
            Email:<br>
            <input type="email" name="email" value="{{$data->email}}" class="form-control"><br>
            Password:<br>
            <input type="password" name="password" value="{{$data->password}}" class="form-control"><br>
            Phone:<br>
            <input type="number" name="phone" value="{{$data->phone}}" class="form-control"><br>
            <input type="submit" name="Save" value="Save"><br>
        </form>
    </div>

@endsection