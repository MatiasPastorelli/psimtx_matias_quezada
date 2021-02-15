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
                <a  href="{{ route('user.index') }}" class="btn btn-info" >Usuarios</a>

                <a  href="{{ route('categoria.index') }}" class="btn btn-info" >Categorias</a>
              </div>
            </div> 
            @endif
         </div>
         <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
              <div class="col col-md-3 col-sm-3 col-xs-3">
               <a  href="{{ route('userCategoria.index') }}" class="btn btn-success" >Seleccionar categorias</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>


@endsection



<script>
  

function accionarFormularioPrincipal() {
    var url = '{{ url("/userIntereses") }}/';
    //filterToggle();
    $.ajax({
      type: "GET",
      url: url,
      data: $("#formularioPrincipal").serialize(),
      beforeSend: function () {
        $("#resultadoPrincipal").block({
          message: '<center><img src="{{ url('plugins')}}/app-assets/images/portrait/small/loading.gif"></center>',
          css: { backgroundColor: '#fff', border : '0px' , width: '100%'},
          overlayCSS: { backgroundColor: '#fff' }
        });
      },
      success: function (data)
      {
        $('html, body').animate({scrollTop: $('#resultadoPrincipal').offset().top}, 800);
        $('#resultadoPrincipal').html(data);
      },
      error: function (xhr)
      {
        $('#resultadoPrincipal').html(xhr.responseText);
      },
    });
    return false;
  };  

</script>