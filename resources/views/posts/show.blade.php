@extends('layouts.layout')

@section('content')
	<a href="/posts" class="btn btn-outline-secondary mb-5">Go Back</a>
	<h1>{{$post->title}}</h1>
	<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
	<div class="card mt-3">
		<div class="card-body">
			{!! $post->body !!}
		</div>
	</div>
	<hr>
	<small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
	<hr>
	@auth
		@if(Auth::user()-> id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!! Form::close() !!}
		@endif
	@endauth
@endsection