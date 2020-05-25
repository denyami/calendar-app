@extends('layouts.app')

@section('content')
<calendar user-name="{{ Auth::user()->name }}" csrf="{{(string)csrf_field()}}" ></calendar>
<form action="/send" method="post">
  <input type="text" name="name">
  <input type="submit" value="送信2">
</form>
@endsection
