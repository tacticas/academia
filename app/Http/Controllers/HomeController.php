<?php

namespace App\Http\Controllers;

use App\Review;
use App\Description;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id =  Auth::id();
        $coach = Auth::user();
        $logros = Description::all()->where('idUser','=',$id);
        $star_prom = Review::all()->where('coach_id','=', $id)->avg('star');
        return view('p_coach.home', compact('logros','star_prom','coach'));
    }
}
