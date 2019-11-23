@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/insta.jpg" class="rounded-circle"></img:src>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create"> Add New Post</a>          
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{count($user->posts)}}</strong> posts</div>
                <div class="pr-5"><strong>34.1k</strong> followers</div>
                <div class="pr-5"><strong>233</strong> following</div>
            </div>
            <div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'Nothing yet'}}</div>
                <div>{{ $user->profile->description ?? 'Nothing yet'}}</div>
                <div><a href="#">{{ $user->profile->url ?? 'coming soon...'}}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">           
                    </a>
                </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection
