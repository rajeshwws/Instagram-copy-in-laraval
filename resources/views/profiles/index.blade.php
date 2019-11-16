@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 pt-5">
      <img src="{{ $user->profile->profileImage() }}"  class="rounded-circle w-100">
    </div>

    <div class="col-9 pt-5">
     <div class="d-flex justify-content-between align-items-baseline">
         <div class="d-flex align-items-center pb-2">
         <div class="h4">{{ $user->username}}</div>
             <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}" ></follow-button>
         </div>
         @can ('update',$user->profile)
         <a href="/p/create">Add New Post</a>
         @endcan

     </div>
        @can ('update',$user->profile)
        <a href="/profile/{{ $user->id}}/edit">Edit Profile</a>
        @endcan
     <div class="d-flex">
            <div class="pr-3"><b>{{ $postCount }}</b> posts</div>
            <div class="pr-3"><b>{{ $followersCount }}</b> followers</div>
            <div class="pr-3"><b>{{ $followingCount }}</b> following</div>
     </div>

     <div>
        <div class="pt-3"><b>{{ $user->profile->title ?? 'N/A' }}</b></div>
        <div class="pt-1">{{ $user->profile->description ?? 'N/A'}}</div>
        <div class="pt-1"><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>

     </div>
    </div>


    <div class="row pt-5">

        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/show/{{ $post->id }}">
            <img src="/storage/{{ $post->image}}" class="w-100" title="{{ $post->caption}}">
            </a>
        </div>
       @endforeach
    </div>

    </div>
</div>
@endsection
