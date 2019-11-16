@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image}}" class="w-100" title="{{ $post->caption}}">
        </div>

        <div class="col-4">
        	<div class="d-flex align-items-center">
        		<div><img src="{{ $post->user->profile->profileImage()}}" class="rounded-circle" style="max-width: 60px;">

        			 </div>
        	<div >
        		<div class="font-weight-bold">
        			<a href="/profile/{{ $post->user->id}}"><span class="text-dark">{{ $post->user->username}}</span></a>
        		</div>
        	</div>

            </div>
            <hr>
            <div><span class="font-weight-bold pr-2">
            	<a href="/profile/{{ $post->user->id}}"><span class="text-dark">{{ $post->user->username}}</span></a></span>{{ $post->caption}}
            </div>
        </div>


    </div>
</div>
@endsection
