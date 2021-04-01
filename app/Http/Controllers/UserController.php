<?php

namespace App\Http\Controllers;

use App\models\usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{
    public function userform(){
        return view ('users.usersform');
    }

    public function save(Request $request){
        
        $validator = $this->validate($request,[
            'nombre','equipo','nacionalidad'=>'required|string|max:255',
        ]);

       
        $userdata = request()->except('_token');
        usuario::insert($userdata);
        return back ()->with('usuarioguardado','usuario guardado');
        

    }
    public function list(){
        $data['users']= usuario::paginate(10);
        return view('users.index',$data);
    }
    public function delete($id){
        usuario::destroy($id);
        return back()->with('usuarioEliminado', 'el usuario a sido eliminado');
    }
    public function editform($id){
        $usuario= usuario::findOrfail($id);
        return view('users.editform',compact('usuario'));
    }
    public function edit(Request $request, $id){
        $datosusuario= request()->except((['_token','_method']));
        usuario::where('id','=',$id)->update($datosusuario);
        return back()->with('usuarioModificado','El usuario ha sido modificado');
    }
}