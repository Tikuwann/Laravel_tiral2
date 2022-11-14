@props(['title','message' => 'null', 'comment'=> 'null'])

<div {{$attributes->merge([
    'class' => '
 border-2 shadow-md w-1/4 p-2'])}}>
    <div>{{$title}}</div>
    <div>画像</div>
    <div>{{$comment}}</div>
    <div>{{$message}}</div>


</div>
