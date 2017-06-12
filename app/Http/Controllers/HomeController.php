<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Cabin;

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
        $clients = Client::all();
        $cabins = Cabin::all()->sortBy('id')->values()->all();
        
        
        //return $cabins;
        return view('home', ['cabins' => $cabins, 'clients' => $clients]);
    }
}
