@extends('layouts.main')
@section('content')
    <div class="col-md-10 mt-3 container">
        <h1 class="text-center">Segment</h1>

        <h4>Segment name: {{$segment->name}}</h4>
        <hr>
        <h5>conditions:</h5>
            @foreach($segment->segment_logics as $key=>$logic)
            <li>{{$logic->logic}} - {{$logic->operator}} - {{$logic->value}}</li>
                <ul>@if($key != count($segment->segment_logics)-1) <h4>{{$logic->condition}}</h4> @endif</ul>

            @endforeach
        <hr><a href="/subscriber?segment={{$segment->id}}" class="lead"> view subscribers</a>

    </div>
@endsection
{{--@foreach($segment->segment_logics as $key=>$logic)--}}
{{--    <ul>@if($key!= 0) <h4>And</h4> @endif</ul>--}}
{{--    @if(is_array($logic->condition[0]))--}}
{{--        @foreach($logic->condition as $key=>$condition)--}}
{{--            <p>@if($key!= 0) or @endif</p>--}}
{{--            <li>{{$condition[0]}} - {{$condition[1]}} - {{$condition[2]}}</li>--}}
{{--        @endforeach--}}
{{--    @else--}}
{{--        <li>{{$logic->condition[0]}} - {{$logic->condition[1]}} - {{$logic->condition[2]}}</li>--}}
{{--    @endif--}}
{{--@endforeach--}}
