 <?php
 $i = 0;  
 ?>
 @extends('layouts.app')
 @section('content')
 <div class="col-12" >
 	<section class="content">
 		<div class="col-md-6 col-md-offset-3">
 			<div class="panel panel-default">
 				<div class="panel-body">
 					<div class="pull-left"><h3>Lista sugerencias</h3></div>
 					<div class="pull-right">
 						<div class="btn-group">
 							<a href="{{ route('userCategoria.create') }}" class="btn btn-info" >Añadir Categoria</a>
 						</div>

 					</div>
 					<div class="table-container">
 						<table id="mytable1" name="mytable1" class="table table-bordred table-striped">
 							<thead>
 								<th>id</th>
 								<th>Nombre</th>
 								<th>Categoria</th>
 								<th>Descripcion</th>
 							</thead>
 							<tbody>
 								@if($intereses->count())
 								@foreach($intereses as $a)  
 								<tr>
 									<td>{{$i = $i + 1}}</td>
 									<td>{{$a->user}}</td>
 									<td>{{$a->categoria}}</td>
 									<td>{{$a->descripcion}}</td>
 								</tr>
 									@endforeach 
 									@else
 									<tr>
 										<td colspan="8">No hay registro !!</td>
 									</tr>
 									@endif
 								</tbody>

 							</table>

 							<a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
 						</div>
 					</div>
 				</div>
 			</div>
 		</section>
		@endsection

