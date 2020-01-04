<?php

namespace App\Http\Controllers;

use App\User;
use App\League;
use App\Role;
use App\Server;
use Illuminate\Http\Request;


class UserController extends Controller
{
   public function index()
   {

        $users = User::all();
        $title = 'Lista de Usuarios';

        return view('users/index', compact('users','title'));
   }

   public function show(User $user)
   {
        $title = 'Usuario Específico';
        return view('users/show', compact('user','title'));
   }

   public function create()
   {
       $servers =  Server::all();
       $roles = Role::all();
       $leagues = League::all();
      return view('users/create', compact('servers','roles','leagues'));
   }

   public function store()
   {
       $data = request()->validate([
            'nombre' => 'required',
            'correo_electronico' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'apellido' => 'required',
            'nombre_de_invocador' => 'required|unique:users,sn',
            'server_id' => 'required',
            'role_id' => 'required',
            'league_id' => 'required',
       ]);
    
       User::create([
        'name' => $data['nombre'],
        'name_2' => $data['name_2'],
        'email' => $data['correo_electronico'],
        'password' => bcrypt($data['password']),
        'apellido' => $data['apellido'],
        'nombre_de_invocador' => $data['nombre_de_invocador'],
        'server_id' => $data['server_id'],
        'role_id' => $data['role_id'],
        'league_id' => $data['league_id'],
        'about' => 'Sobre Mí',
        'type_id' => '3',
       ]);
    

       return redirect()->route('users');
   }

   public function edit(User $user)
   {
       $servers =  Server::all();
       $roles = Role::all();
       $leagues = League::all();
       return view('users/edit', compact('user','servers','roles','leagues'));
   }


   public function update(User $user)
   {
       
        $data = request()->validate([
            'name' => 'required',
            'password' => '',
            'apellido' => 'required',
            'nombre_de_invocador' => 'required|unique:users,nombre_de_invocador,'.$user->id,
            'server_id' => 'required',
            'role_id' => 'required',
            'league_id' => 'required',
            'about' => ''
        ]);
            
        if($data['password'] != null){
            $data['password']  = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        
        $user->update($data);
   
       return redirect()->route('user.show', ['user' => $user]);
     
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users');
    }
}
