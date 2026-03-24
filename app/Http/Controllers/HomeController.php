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
        if ($nama == 'link') {
            return view('link');
        }

        $ucapan = Ucapan::orderBy('id', 'DESC')->get();
        return view('invitation-fullpic')->with('ucapan', $ucapan)->with('penerima', $nama);
    }

    public function link()
    {
        return view('invitation-fullpic');
    }

}
