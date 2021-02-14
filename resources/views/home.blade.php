@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->is_admin == "1")
                <div class="card-header">Menu administrador</div>

                <div class="card-body">
                   <div class="col col-md-3 col-sm-3 col-xs-3">
                    <a  href="{{ route('user.index') }}" class="btn btn-info btn-xs" >Usuarios</a>
                 
                    <a  href="{{ route('categoria.index') }}" class="btn btn-info btn-xs" >Categorias</a>
                   </div>
               </div> 
               @endif 
           </div>
       </div>
   </div>
</div>
@endsection

