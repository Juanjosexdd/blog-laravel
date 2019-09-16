@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 offset-2">
		<h1>Lista de artículos</h1>

		@foreach($posts as $post)

		<div class="card card-defaul">
			<div class="card-header">
				{{ $post->name }}
			</div>
			<div class="card-body">
				@if($post->file)
				<img src="{{$post->file}}" class="img-fluid" alt="">
				@endif
				{{$post->excerpt}}
				<hr>
				<a href="{{ route('post', $post->slug) }}" class="float-right">Leer más</a>
			</div>
		</div>

		@endforeach
		{{$posts->links()}}

	</div>
</div>
@endsection