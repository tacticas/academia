<?php

namespace App\Http\Controllers;

use App\User;
use App\League;
use App\Role;
use App\Server;
use App\Description;
use App\Review;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {   
        $servers =  Server::all();
        $roles = Role::all();
        $leagues = League::all();
        $coachs = User::all()->where('type_id','=','2');
        return view('coach/index', compact('coachs','servers','roles','leagues'));
    }

    public function show(User $coach)
    {
        $logros = Description::all()->where('idUser','=',$coach->id);
        $reviews = Review::where('coach_id','=',$coach->id)->orderBy('created_at', 'desc')->limit(5)->get();
        $best = Review::where('coach_id','=',$coach->id)->orderBy('star', 'desc')->limit(1)->first();
        $star_prom = Review::all()->where('coach_id','=',$coach->id)->avg('star');
        if(count($reviews) == 0){
            return view('coach.showN',  compact('coach','logros'));
        }else{
            return view('coach.show',  compact('coach','logros','reviews','star_prom','best'));
        }
        #dd($best);
        
    }
}
