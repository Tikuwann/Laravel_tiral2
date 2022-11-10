@extends('layouts.helloapp')
@section('title','Board.add')

@section('menubar')
@parent
adddddddddddddddd
@endsection


@section('content')


<form action="/board/add" method="post">
    <table>
    @csrf
<tr><th> id: </th><td><input type="nuhmber" name="person_id"></td></tr>
<tr><th> title: </th><td><input type="text" name="title"></td></tr>
<tr><th> message: </th><td><input type="text" name="message"></td></tr>

 <tr><th></th><td> <input type="submit"value="send"></td></tr>
    </table></form>
@endsection


@section('footbar')
copyright 2022
@endsection
