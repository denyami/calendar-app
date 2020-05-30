@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <button type=“button” onclick="location.href='/calendar'">カレンダーに戻る</button>
                <div class="card-body">
                    <h1>{{$dateData}}</h1>
                        <form action="/plan" method="post">
                        {{ csrf_field() }}
                        <div>
                            <input type="hidden" name="id":value="{{$id}}">
                            <input type="hidden" name="u_id":value="{{$u_id}}">
                            <input type="hidden" name="date":value="{{(string)$dateData}}">
                            <input type="text" name="todo" placeholder="予定を入れる">
                          <input type="submit" value="送信">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

