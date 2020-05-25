@extends('layouts.app')

@section('content')
<calendar user-name="{{ Auth::user()->name }}" user-id="{{ Auth::user()->id }}" ></calendar>
<form action="/send" method="post">
  <input type="text" name="name">
  <input type="submit" value="送信2">
</form>
@endsection
