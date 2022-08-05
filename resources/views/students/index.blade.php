@extends('students.layout')
@section('content')
    <a href="{{url('/home/create')}}" class="btn btn-success mt-4 ms-5">Add+</a>
    <hr>
    <div class="row">
        <table class="table table-bordered me-5 ms-5">
        
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $item)
                <tr>
                    <td>{{$loop->iteration}}<td>
                    <td>{{$item->name}}<td>
                    <td>{{$item->email}}<td>
                    <td>{{$item->passwordl}}<td>
                    <td>{{$item->phone}}<td>
                    <td>
                        <a href="{{url('/home/'.$item->id)}}" class="btn btn-success">Show</a>
                        <a href="{{url('/home/'.$item->id.'/edit')}}"  class="btn btn-success">Edit</a>
                        <form method="post" action="{{url('/home/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger" onclick =return confirm("confirm delete?")">Delete</button>
                        </form>
                    </td>
                <tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
