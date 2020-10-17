<?php

namespace App\Http\Controllers;

use App\Models\Logic;
use App\Models\Operator;
use App\Models\Segment;
use App\Models\SegmentLogic;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logics = Logic::all();
        $operators = Operator::all();
        return view('create_segment',compact('logics','operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $segment = new Segment();
        $segment->name = $request->name;
        if ($segment->save()){
            foreach ($request->logics as $key => $logic){
                $segment_logic = new SegmentLogic();
                $segment_logic->segment_id = $segment->id;
                $segment_logic->logic = $logic;
                $segment_logic->operator = $request->operators[$key];
                $segment_logic->value = $request->values[$key];
                $segment_logic->condition = $request->conditions[$key];
                $segment_logic->save();
            }
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $segment = Segment::with('segment_logics')->findOrFail($id);
        return view('view_segment',compact('segment'));
        dd($subscribers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
