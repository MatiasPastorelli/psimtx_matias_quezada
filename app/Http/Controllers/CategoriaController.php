<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['categorias'] = Categoria::orderBy('id','asc')->get();
      
        return view('Categoria.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Categoria.create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre'=>'required','descripcion'=>'required']);
        Categoria::create($request->all());
        return redirect()->route('categoria.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoria=Categoria::find($id);
        return view('categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required']);
 
        Categoria::find($id)->update(['Demandante' => $request->demandante,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,]);
        return redirect()->route('categoria.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Categoria::where('id',$id)->Delete();
        return redirect()->route('categoria.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
