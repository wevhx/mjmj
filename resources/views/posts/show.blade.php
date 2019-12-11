@extends('layouts.app')

@section('title', 'My Blog')

@section('content')
	  <div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
                @if (session('message'))
                    <p class="text-success"><b>{{ session('message') }}</b></p>
                @endif
                
				<div class="card mt-4">
					<div class="card-header">
						  {{ $post->title }}                                             
					</div>
					<div class="card-body">
						<h2 class="card-title">post By: {{ $post->user->name }}</h2>
						<p class="card-text">{{ $post->content }}</p>
					</div>
					
					<div class="card-header">
						<i>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</i>
						<br>
						<span><a href="/posts/{{ $post->id }}/edit">Edit</a></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
	
	
		
		
	  </div>
@endsection
