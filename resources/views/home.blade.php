@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->is_admin == "1")
                <div class="card-header">Menu administrador</div>

                <div class="card-body">
                    
                        
                    hacer algo aqui 
                    

                   
                </div> 
                @endif 
            </div>
        </div>
    </div>
</div>
@endsection
