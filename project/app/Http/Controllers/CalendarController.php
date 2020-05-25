<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('calendar');
    }

    public function send(Request $request){
      $name = $request->name;
      $id = $request->id;
      return view('result',compact('name','id'));
    }

}
