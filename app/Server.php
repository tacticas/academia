<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //protected $table = 'table_name';

    //public $timestamps = false;

    protected $filable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
