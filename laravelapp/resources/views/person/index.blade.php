@extends('layouts.helloapp')
@section('title','Person.index')

@section('menubar')
@parent
いんでっくすぺーじ
@endsection


@section('content')
<table>
    <tr><th>Person</th><th>Board</th></tr>
    @foreach ($hasItems as $item )
    <tr>
        <td>{{$item->get()}}</td>
        <td>
            <table width="100%">
                @foreach ($item->board as $obj)
                <tr><td>{{$obj->get()}}</td></tr>

                @endforeach
            </table>
        </td>

    </tr>
 @endforeach
</table>
<div style="margin:10px;"></div>
<table><tr><th>person</th></tr>
    @foreach ($noItems as $item)
    <tr>
        <td>{{$item->get()}}</td>
    </tr>

    @endforeach
</table>
@endsection


@section('footbar')
copyright 2022
@endsection
