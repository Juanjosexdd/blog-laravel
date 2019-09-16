@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						Editar categoria

					</div>
					<div class="card-body">
						{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
							@include('admin.categories.partials.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection