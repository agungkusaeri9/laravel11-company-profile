<?php

namespace App\Http\Controllers;

use App\Models\PesanMasuk;
use Illuminate\Http\Request;

class PesanMasukController extends Controller
{
    public function index()
    {
        $items = PesanMasuk::latest()->get();
        return view('pages.pesan-masuk.index', [
            'title' => 'Data Pesan Masuk',
            'items' => $items
        ]);
    }

    public function destroy($id)
    {
        $item = PesanMasuk::findOrFail($id);
        $item->delete();
        return redirect()->route('pesan-masuk.index')->with('success', 'Data berhasil dihapus!');
    }
}
