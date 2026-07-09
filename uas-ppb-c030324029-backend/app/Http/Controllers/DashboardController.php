<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalKontak = Kontak::count();
        $kontakTerbaru = Kontak::latest()->take(5)->get();

        return view('dashboard', [
            'totalKontak'   => $totalKontak,
            'kontakTerbaru' => $kontakTerbaru,
        ]);
    }
}
