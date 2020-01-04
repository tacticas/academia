<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    
    protected $fillable = [
        'achievement','idUser'
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
