<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\Province;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $province = $this ->getProvince();

        return view('home', compact('province'));
    }

    public function getProvince(){
        return Province::pluck('title', 'code');
    }

    public function getCities($id){
        return City::where('province_code', $id)->pluck('title', 'code');
    }
}
