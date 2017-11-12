@extends('layouts.app')

@section('content')
<style>
    .name {
        color: #878088;
        font-style: italic;
        font-size: 10px;
    }
</style>
<div class="background mh2">
    {{--<img src="../img/404.png" width="800px" height="210px" class="logo center-block">--}}
    <h1 class="text-center align-middle mainheader">{{$post->title}}</h1>


</div>

<br><br><br>
<div class="container">
    <div class="row">
        <p class="name">{{$post->author->name}}</p>
        <p class="name">Date: {{$post->created_at}}</p>
        <hr style="border-top: 1px solid #0e3d08;">

        <div>

            <p>
                {{$post->content}}
            </p>

        </div>

    </div>
</div>
@endsection