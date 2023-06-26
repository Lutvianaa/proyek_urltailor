<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mitra;
use App\Models\Layanan;
use App\Models\Rumahjahit;
use App\Models\Star;
use App\Models\Tailor;

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
    public function index()
    {
        $data = User::all();
        $jumlah1 = User::count();
        $jumlah2 = Mitra::count();
        $jumlah3 = Layanan::count();
        $m1 = Rumahjahit::count();
        $m2 = Star::count();
        $m3 = Tailor::count();
        $jumlah4 = $m1+$m2+$m3;
        return view('home', compact('data', 'jumlah1', 'jumlah2', 'jumlah3', 'jumlah4'));
    }
}
