<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class PrecioController extends Controller
{
    public function index(User $coach){
        return $coach->price;
    }
}
