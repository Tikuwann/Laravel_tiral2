@extends('layouts.helloapp')
@section('title','Person.find')

@section('menubar')
@parent
kenskauy
@endsection


@section('content')
<form action="/person/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
</form>
@if (isset($item))
<table>
    <tr><th>data</th></tr>
    <tr>
        <td>{{$item->id}}: {{$item->name}}({{$item->age}})</td>
    </tr>
</table>

@endif


@endsection


@section('footbar')
copyright 2022
@endsection
