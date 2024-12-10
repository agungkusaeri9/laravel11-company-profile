<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Portofolio;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'layanan' => Layanan::count(),
            'portofolio' => Portofolio::count(),
            'testimoni' => Testimoni::count(),
        ];
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'count' => $count
        ]);
    }
}
