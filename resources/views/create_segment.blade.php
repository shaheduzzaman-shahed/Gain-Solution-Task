@extends('layouts.main')
@section('content')
    <div class="col-md-8 mt-4 container p-2">
        <h4 class="text-center">Create Segment</h4>
        <form action="/segment" method="post">
            @csrf
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Segment Name:</label>
                <div class="col-sm-9 ml-2">
                    <input type="text" class="form-control" required name="name" id="" placeholder="enter segment name">
                </div>
            </div>
            <div id="logic-container">
                <div  id="logic-section">
                    <div id="logic-field" class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Segment Logic:</label>
                    <div class="col-sm-10 row ml-2">
                        <select class="form-control col-sm-2" id="logic" required name="logics[]">
                            @foreach($logics as $logic)
                                <option value="{{$logic->name}}">{{$logic->value}}</option>
                            @endforeach
                        </select>
                        <select class="form-control col-sm-2 ml-2" id="operator" required name="operators[]">
                            @foreach($operators as $operator)
                                <option value="{{$operator->name}}">{{$operator->value}}</option>
                            @endforeach
                        </select>
                        <div class="col-sm-3" id="sel1" >
                            <input type="text" class="form-control" required name="values[]" id="" placeholder="enter value">
                        </div>
                        <select class="form-control col-sm-2 " id="" name="conditions[]">
                            <option value="and">condition</option>
                            <option value="and">And</option>
                            <option value="or">Or</option>
                            <option value="and">None</option>
                        </select>
                    </div>
                    </div>
                </div>
            </div>
            <a class="m-2 btn btn-success" id="add-logic">+ Add logic</a>
            <button type="submit" class="btn btn-primary ml-5">Submit</button>
        </form>
        <hr><p class="text-warning">Note: As frontend is not dynamic so please keep the last logic condition Unselect or None!</p>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#add-logic').click( function () {
                var logic = $('#logic-section').html();
                $('#logic-container').append(logic)
            })
        });
    </script>
@endpush
