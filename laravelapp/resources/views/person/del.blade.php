@extends('layouts.helloapp')
@section('title','Person.Del')

@section('menubar')
@parent
Edddddididiididididi
@endsection


@section('content')

@if(count($errors)>0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach
    </ul>
</div>
@endif



<form action="/person/del" method="post">
    <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
<tr><th> name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
<tr><th> mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
<tr><th> age: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>

 <tr><th></th><td> <input type="submit" name="input" value="send"></td></tr>
    </table></form>
@endsection


@section('footbar')
copyright 2022
@endsection
