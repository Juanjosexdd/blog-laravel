@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						Lista de etiquetas
						<a href="{{ Route('tags.create')}}" class="btn btn-sm btn-info float-right">
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
								@foreach($tags as $tag)
								<tr>
									<td>{{$tag->id}}</td>
									<td>{{$tag->name}}</td>
									<td class="btn-group" width="10px">
										<a class="btn btn-info btn-sm" href="{{ route('tags.show', $tag->id)}}">
											<i class="far fa-eye"></i>
										</a>

										<a class="btn btn-warning btn-sm" href="{{ route('tags.edit', $tag->id)}}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										{!! Form::open(['route'=> ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
											<button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
										{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $tags->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection