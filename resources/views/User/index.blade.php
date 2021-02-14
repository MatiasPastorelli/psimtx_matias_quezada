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
                        <div class="pull-left"><h3>Lista Usuarios</h3></div>
                        <div class="pull-right">
                          <div class="btn-group">
                            <a href="{{ route('user.create') }}" class="btn btn-info" >Añadir usuario</a>
                          </div>
                        </div>
                        <div class="table-container">
                          <table id="mytable1" name="mytable1" class="table table-bordred table-striped">
                           <thead>
                             <th>id</th>
                             <th>Nombre</th>
                             <th>Email</th>
                             <th>Estado</th>
                             <th></th>
                             <th></th>
                           </thead>
                           <tbody>
                            @if($users->count())
                            @foreach($users as $user)  
                            <tr>
                              <td>{{$i = $i + 1}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              @if($user->is_active == 1)
                                <td><span class="label label-success">Activo</span></td>
                              @else
                                <td><span class="label label-danger">Inactivo</span></td>
                              @endif
                              <td><a class="btn btn-primary" href="{{action('UserController@edit', $user->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                              <td>
                                <form action="{{action('UserController@destroy', $user->id)}}" method="post">
                                 {{csrf_field()}}
                                 <input name="_method" type="hidden" value="DELETE">

                                 <button class="btn btn-secondary" type="submit"><span class="glyphicon glyphicon-heart"></span></button>
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

                        <a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>



              @endsection

