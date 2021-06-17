<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($nama = '')
    {
        $ucapan = Ucapan::orderBy('id', 'DESC')->get();
        return view('invitation')->with('ucapan', $ucapan)->with('penerima', $nama);
    }


}
