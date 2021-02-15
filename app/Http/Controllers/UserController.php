<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        $data['users'] = User::where('id','!=','1')->orderBy('id','asc')->get();
        //$data['users'] = User::orderBy('id','asc')->get();    
        return view('User.index')->with($data);
    }




    public function create()
    {
        //
        return view('user.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','email'=>'required']);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 0,
            'is_active' => 1,
         ]);
        return redirect()->route('user.index')->with('success','Registro creado satisfactoriamente');
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
        $user=User::find($id);
        return view('user.edit',compact('user'));
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
 
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,]);
        return redirect()->route('user.index')->with('success','Registro actualizado satisfactoriamente');
 
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /*
    Funcion que no eliminar al usuario, pero cambia el estado del usuario
    */
    public function destroy($id)
    {
        $data = User::where('id',$id)->orderBy('id','asc')->get();


        foreach ($data as $key => $user) {
            if ($user->is_active == 0) {
                 User::where('id',$id)->update([
                'is_active' => '1']); 
                 return redirect()->route('user.index')->with('success','Registro activado satisfactoriamente');
            }else
            {
                User::where('id',$id)->update([
                'is_active' => '0']); 
                return redirect()->route('user.index')->with('success','Registro desactivado satisfactoriamente');
            }
        }
    }
}
