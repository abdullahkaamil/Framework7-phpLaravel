<?php

namespace App\Http\Controllers;
use app\main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $mains = DB::table('mains')->paginate(5);
        return view('index', compact('mains'));
        
    }
    public function add()
    {
        return view('home');
    }

}
