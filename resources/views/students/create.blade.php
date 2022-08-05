@extends('students.layout')
@section('content')
    <div class="me-5 ms-5 mt-5">
        <form action="{{url('home')}}" method="post">
            {!! csrf_field() !!}
            User Name:<br>
            <input type="text" name="name" value="" class="form-control"><br>
            Email:<br>
            <input type="email" name="email" value="" class="form-control"><br>
            Password:<br>
            <input type="password" name="password" value="" class="form-control"><br>
            Phone:<br>
            <input type="number" name="phone" value="" class="form-control"><br>
            <input type="submit" name="Save" value="Save"><br>
        </form>
    </div>
@endsection