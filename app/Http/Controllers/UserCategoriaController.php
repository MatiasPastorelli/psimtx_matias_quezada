<?php

namespace App\Http\Controllers;
use App\User;
use App\Categoria;
use App\UserCategoria;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     public function index()
    { 	

        $data['categoriaUser'] =  DB::table('user_categorias as a')
                                  ->select('id_categoria')
        					  	  ->where('a.id_user',Auth::user()->id);


        $data['users']  =   DB::table('user_categorias as a')
                                  ->select('id_user')
                                  ->whereIn('a.id_categoria',$data['categoriaUser']);                   

        $data['intereses'] =  DB::table('user_categorias as a')
                                  ->select('b.name as user','c.nombre as categoria','c.descripcion')
                                  ->join('users as b','a.id_user','=','b.id')
                                  ->join('categorias as c','a.id_categoria','=','c.id')
                                  ->whereIn('a.id_user',$data['users'])
                                  ->orderby('user','asc')->get();
                        
                                       
        return view('UserCategoria.index')->with($data);
    }




    public function create(Request $request)
    {
    	$data['categorias'] = Categoria::orderby('nombre','asc')->get();
        return view('UserCategoria.create')->with($data);
    }


    public function eliminarIntereses($id)
    {
        UserCategoria::where('id_user',$id)->Delete();
    }

    public function store(Request $request)
    {   
        $this->eliminarIntereses(Auth::user()->id);
        foreach ($request->categoria as $categoria) {
            $a = new UserCategoria;
            $a->id_user = Auth::user()->id;
            $a->id_categoria = $categoria;
            $a->save();
        }
    	return redirect()->route('userCategoria.index')->with('success','Intereses Guardados');
    }

}