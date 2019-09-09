<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // function to get all shop in the main page
    public function index()
    {
        $shops = Shop::all();
        return view('home',compact('shops'));
    }

}
