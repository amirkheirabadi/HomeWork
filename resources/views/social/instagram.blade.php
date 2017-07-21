@extends('layouts.main')

@section('content')
<div class="allposts">
    @foreach($data['data'] as $post)
        <div class="post">
        <div class="pic">
            <a href="#">
                <img alt="#" src="{{$post['images']['low_resolution']['url']}}">
            </a>
        </div><!--pic-->
        <div class="postcontent">
            <div class="subtitle">{{$post['caption']['text']}}</div><!--subtitle-->
        </div><!--postcontent-->
    </div><!--post-->
    @endforeach
</div><!--all post-->
@endsection