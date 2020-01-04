<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    public function coach()
    {
        return $this->belongsTo(User::class);
        //return $this->belongsTo(Server::class, 'idServer');
        //la comvención es nombretabla +_id 
    }
    public function stud()
    {
        return $this->belongsTo(User::class);
        //return $this->belongsTo(Server::class, 'idServer');
        //la comvención es nombretabla +_id 
    }
}
