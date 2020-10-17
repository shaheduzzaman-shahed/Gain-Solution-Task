<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $segments = Segment::all();
        return view('welcome', compact('segments'));
    }
}
