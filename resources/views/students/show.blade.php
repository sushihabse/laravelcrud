@extends('students.layout')
@section('content')
<div>
    <table class="table table-bordered ms-5 me-5 mt-5">
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>User Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$shihab->name}}</td>
                <td>{{$shihab->email}}</td>
                <td>{{$shihab->password}}</td>
                <td>{{$shihab->phone}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection