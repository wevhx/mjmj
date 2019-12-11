
@extends('layouts.app')

@section('title', 'Edit Post')


@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
                @if (session('message'))
                    <p class="text-success"><b>{{ session('message') }}</b></p>
                @endif
				<h2>Edit Post</h2>
				@if ($errors->any())
					<div>
						Errors:
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<hr>
				<form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
					@csrf
                    @method('PUT')
					<div class="form-group">
						<label for="title">Post Title:</label>
						<input type="input" type="text" class="form-control" name="title" value="{{ $post->title }}">
					</div>
					<div class="form-group">
						<label for="content">Post Content:</label>
						<textarea class="form-control" name="content" rows="5">{{ $post->content }}</textarea>
					</div>
					<input type="submit" value="Edit Post" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
</div>
@endsection
