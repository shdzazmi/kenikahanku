<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class InvitationController extends Controller
{

    public function __construct()
    {
    }

    public function put(Request $request)
    {
        $date = new \DateTime(now());
        $tanggal = $date->format('d F Y h:i a');
        $ucapan = [
            'nama' => $request->nama,
            'ucapan' => $request->ucapan,
            'created_at' => now(),
            'tanggal' => $tanggal
        ];
        Ucapan::insert($ucapan);

        return $ucapan;
    }

}
