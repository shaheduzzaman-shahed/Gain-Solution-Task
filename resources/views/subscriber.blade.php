@extends('layouts.main')
@section('content')
    <div class="col-md-10 mt-3 container">
        <h4 class="text-center">Subscriber List</h4>
        <table class="table align-items-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">email</th>
                <th scope="col">Birthday</th>
                <th scope="col">created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscribers as $key => $subscriber)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$subscriber->first_name}}</td>
                    <td>{{$subscriber->last_name}}</td>
                    <td>{{$subscriber->email}}</td>
                    <td>{{$subscriber->birth_day}}</td>
                    <td>{{$subscriber->created_at->format('Y-m-d')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
