@extends('layouts.helloapp')

@section('title','user authenication')

@section('menubar')
@parent
user authenication
@endsection

@section('content')
<p>{{$message}}</p>
<form action="/hello/auth" method="post">
    <table>
        @csrf
        <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
        <tr><th>pass: </th><td><input type="text" name="password"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
@endsection

@section('footer')
copiathut
@endsection








