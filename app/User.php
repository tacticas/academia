<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido','nombre_de_invocador','server_id','role_id','league_id','price','about','type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $cast = [
        //convertir campos a algun tipo de dato
        //'campo_bolean' => 'boolean'
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
        //return $this->belongsTo(Server::class, 'idServer');
        //la comvención es nombretabla +_id 
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
        //return $this->belongsTo(Server::class, 'idServer');
        //la comvención es nombretabla +_id 
    }
    public function league()
    {
        return $this->belongsTo(League::class);
        //return $this->belongsTo(Server::class, 'idServer');
        //la comvención es nombretabla +_id 
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
        //return $this->belongsTo(Server::class, 'idServer');
        //la comvención es nombretabla +_id 
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
