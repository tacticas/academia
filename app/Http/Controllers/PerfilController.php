<?php

namespace App\Http\Controllers;

use Auth;
use App\League;
use App\Role;
use App\Server;
use App\Description;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(){

        $id = Auth::id();
        $user = Auth::user();
        $logros = Description::all()->where('idUser','=',$id);
        $servers =  Server::all();
        $roles = Role::all();
        $leagues = League::all();
        return view('p_coach/editar', compact('user','servers','roles','leagues','logros'));
    }
    
    public function logro(){
        $id = Auth::id();
        $user = Auth::user();
        $logros = Description::all()->where('idUser','=',$id);
        return view('p_coach/logros', compact('user','logros'));
    }

    public function logroCreate(){
        
        $data = request()->validate([
            'logro' => 'required|min:1|max:124',
        ]);
        
        Description::create([
            'achievement' => $data['logro'],
            'idUser' => Auth::id(),
        ]);

       return redirect()->route('coach.logro');
    }

    public function logroEdit(Description $logro){
        $id = Auth::id();
        $user = Auth::user();
        $logros = Description::all()->where('idUser','=',$id);
        return view('p_coach/logros', compact('user','logros','logro'));
    }

    public function logroDestroy(Description $logro)
    {
        $logro->delete();
        return redirect()->route('coach.logro');
    }

    public function update()
    {
        $user = Auth::user();
         $data = request()->validate([
             'name' => 'required',
             'password' => '',
             'apellido' => 'required',
             'nombre_de_invocador' => 'required|unique:users,nombre_de_invocador,'.Auth::id(),
             'server_id' => 'required',
             'role_id' => 'required',
             'league_id' => 'required',
             'about' => '',
             'price' => '',
         ]);
             
         if($data['password'] != null){
             $data['password']  = bcrypt($data['password']);
         }else{
             unset($data['password']);
         }
         
         $user->update($data);
    
        return redirect()->route('coach.editar');
      
     }

}
