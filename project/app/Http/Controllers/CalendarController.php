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
      $u_id = $request->u_id;
      $dateData = $request->dateData;
      return view('send',compact('name','id','u_id','dateData'));
    }

}
