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
					<h3 class="panel-title">Nuevo usuario</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('user.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="form-group row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre usuario">
									</div>
								</div>
							</div>

							<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>	
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" required autocomplete="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
									</div>
								</div>
							</div>


							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required='string,min:6,max:16,confirmed' autocomplete="new-password"  placeholder="Password">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							
							<div class="form-actions">
								<div class="text-right">
									<div class="form-group">
										<input type="submit"  value="Guardar" class="btn btn-success btn-block">
										<a href="{{ route('user.index') }}" class="btn btn-info btn-block" >Atrás</a>
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
