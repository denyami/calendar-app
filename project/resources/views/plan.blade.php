@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                   <h4>{{$plan->id}}</h4>
                   <h4>{{$plan->todo}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
