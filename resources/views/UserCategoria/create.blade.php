              @extends('layouts.app')
              @section('content')
              <div class="col-12" >
                <section class="content">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="pull-left"><h3>Seleccionar Categorias</h3></div>
                        <div class="pull-right">
                        </div>
                        <div class="table-container">
                            <form method="post" action="{{ route('userCategoria.store') }}"  >
                             {{csrf_field()}}
                             <div>
                                 <h1 style="color:green;" align="center"> {{Session::get('alert1')}}</h1>
                                 <tr>

                                 </tr>

                                 <div class="mt-2 col-md-12">
                                    <table class="table table-striped table-bordered zero-configuration" id="dt_list_email">
                                        <tr>
                                            <td></td>
                                            <td>Categoria</td>
                                            <td>Descripción</td>
                                        </tr>

                                        @foreach($categorias as $categoria)
                                        <!-- <tr style="background-color: #ffcccc"> -->
                                            <tr> 
                                                <td>
                                                  <input type="checkbox" name="categoria[]" value="{{$categoria->id}}" onchange="validacion(this)"> 
                                              </td>
                                              <td>
                                                {{$categoria->nombre}}
                                            </td>
                                            <td>
                                                {{$categoria->descripcion}}
                                            </td>
                                        </tr>

                                        @endforeach
                                    </table>
                                </div>
                                <input name="user_id" id='id' type="hidden" value=" {{Auth::user()->id}}">
                            </div>


                            <input class="btn btn-success btn-xs mt-2 "  type="submit"  value="Agregar" > 
                        </form>
                        <a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection


    <script>

   function validacion(obj) {
  limite=5;
  num=0;
  if (obj.checked) {
    for (i=0; ele=obj.form.elements[i]; i++)
      if (ele.checked) num++;
  if (num>limite)
    obj.checked=false;
  }
} 

    </script>