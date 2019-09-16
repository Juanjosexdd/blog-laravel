@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						Lista de categorias
						<a href="{{ Route('categories.create')}}" class="btn btn-sm btn-info float-right">
							Crear
						</a>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nombre</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{$category->id}}</td>
									<td>{{$category->name}}</td>
									<td class="btn-group" width="10px">
										<a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id)}}">
											<i class="far fa-eye"></i>
										</a>

										<a class="btn btn-warning btn-sm" href="{{ route('categories.edit', $category->id)}}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										{!! Form::open(['route'=> ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
											<button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
										{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $categories->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection