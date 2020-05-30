<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function store(Request $request)
    {

      $plan = new Plan;
      $plan->id = $request->id;
      $plan->date = $request->date;
      $plan->todo = $request->todo;
      $plan->save();
      return redirect('/plan');
    }
    //
}
