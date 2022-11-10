@extends('layouts.helloapp')
@section('title','Board.index')

@section('menubar')
@parent
いんでっくすぺーじ
@endsection


@section('content')
<table>
    <tr><th>Messages</th><th>message</th></tr>
    @foreach ($items as $item )
    <tr>
        <td>{{$item->message()}}</td>
        <td>{{$item->person->name()}}</td>
    </tr>
 @endforeach
</table>
@endsection


@section('footbar')
copyright 2022
@endsection
