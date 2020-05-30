@extends('layouts.app')


@section('title', '新規作成')

@section('content')
    <h1>{{$dateData}}</h1>
    <h1>{{$id}}</h1>
    <form action="/plan" method="post">
      {{ csrf_field() }}
      <div>
          <input type="hidden" name="id":value="{{$id}}">
          <input type="hidden" name="u_id":value="{{$u_id}}">
          <input type="hidden" name="date":value="{{(string)$dateData}}">
          <input type="text" name="todo" placeholder="予定を入れる">
      </div>
      <div>
      </div>
      <div>
        <input type="submit" value="送信">
      </div>
    </form>
@endsection
