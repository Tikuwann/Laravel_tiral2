@extends('layouts.helloapp')


@section('menubar')
@parent
sesion page
@endsection

@section('content')
<p>{{$session_data}}</p>
<form action="/hello/session" method="post">
    @csrf
    <input type="text" name="input">
    <input type="submit" value="send">
</form>
@endsection

@section('footbar')
copy-------
@endsection










