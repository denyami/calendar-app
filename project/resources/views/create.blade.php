
@extends('layouts.app')


@section('title', '新規作成')

@section('content')
  <form action="/plan" method="post">
    {{ csrf_field() }}
    <div>
        <input type="hidden" name="id":value="{{Auth::user()->id}}">
        <input type="text" name="date" placeholder="{{dateData}}">
        <input type="text" name="todo" placeholder="予定を入れる">
    </div>
    <div>
    </div>
    <div>
      <input type="submit" value="送信">
    </div>
  </form>
@endsection
