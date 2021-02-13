
@extends('layouts.app')

@section('content')
<div class="col-12" >

  <section class="content">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Categoria</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('categoria.create') }}" class="btn btn-info" >Añadir Categoria</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable1" name="mytable1" class="table table-bordred table-striped">
             <thead>
               <th>id</th>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th></th>
               <th></th>
             </thead>
             <tbody>
              @if($categorias->count())  
              @foreach($categorias as $categoria)  
              <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td><a class="btn btn-primary" href="{{action('CategoriaController@edit', $categoria->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('CategoriaController@destroy', $categoria->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection

