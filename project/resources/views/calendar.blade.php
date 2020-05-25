@extends('layouts.app')

@section('content')
<calendar user-name="{{ Auth::user()->name }}" user-id="{{ Auth::user()->id }}" ></calendar>
@endsection
