@extends('layouts.app')
@section('content')
<div align="center">
	<section class="content">
		    <div class="col-md-6 col-md-offset-3">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default" align=center>
				<div class="panel-heading">
					<h3 class="panel-title">Nueva categoria</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('categoria.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre categoria">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Descripcion">
									</div>
								</div>
							</div>
							


							<div class="form-actions">
								<div class="text-right">
									<div class="form-group">
										<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('categoria.index') }}" class="btn btn-info btn-block" >Atrás</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
