@extends('layouts.main')
@section('content')
    <div class="col-md-10 mt-3 container">
        <h1 class="text-center">Welcome</h1>
        <p class="text-info">Here are the Segment list.
            From here you can view the logics in segment and also Subscriber list according to the Segment!</p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($segments as $key => $segment)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <td>
                    <a  class="lead text-dark">{{$segment->name}}</a>
                </td>
                <td>
                    <a href="/subscriber?segment={{$segment->id}}" class="btn">View subscribers</a>
                    <a href="{{url('segment',$segment->id)}}" class="ml-1 btn">View segment</a><br>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
{{--        @foreach($segments as $key => $segment)--}}
{{--            <span>{{$key+1}}. </span><a  class="lead text-dark">{{$segment->name}}</a>--}}
{{--            <a href="/subscriber?segment={{$segment->id}}" class="ml-5"> view subscribers</a>--}}
{{--            <a href="{{url('segment',$segment->id)}}" class="ml-5"> view segment</a><br>--}}
{{--        @endforeach--}}


    </div>
@endsection
