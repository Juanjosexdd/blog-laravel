@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 offset-2">
		<h1>{{ $post->name }}</h1>

		<div class="card card-defaul">
			<div class="card-header">
				Categoría
				<a href="{{ route('category', $post->category->slug) }}"> {{$post->category->name}}</a>
			</div>
			<div class="card-body">
				@if($post->file)
				<img src="{{$post->file}}" class="img-fluid" alt="">
				@endif
				{{$post->excerpt}}
				<hr>
				{!! $post->body !!}
				<hr>
				<span class="float-right">
				Etiquetas
				@foreach($post->tags as $tag)

					<a href="{{ route('tag', $tag->slug) }}">
						{{ $tag->name }}
					</a>

				@endforeach
				</span>
			</div>
		</div>

	</div>
</div>
@endsection