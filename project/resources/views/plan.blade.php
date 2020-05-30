@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @foreach($plans as $plan)
                       <!--<h4>{{$plan->id}}</h4>-->
                       <div>
                           <span>{{$plan->date}}</span>
                           <span>{{$plan->todo}}</span>
                       </div>
             
             
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
