<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\League;
use Illuminate\Http\Request;

class AgendarController extends Controller
{
    public function index(User $coach){
        if($coach->id == Auth::id()){
           return redirect(url()->previous()); 
        }
       

        return view('agendar/index', compact('coach'));
    }
    public function getPrice(User $coach){
        return $coach->price;
    }
}
