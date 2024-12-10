<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class GaleriController extends Controller
{
    public function index()
    {
        $items = Galeri::orderBy('judul', 'ASC')->get();
        return view('pages.galeri.index', [
            'title' => 'Data Galeri',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.galeri.create', [
            'title' => 'Buat Galeri'
        ]);
    }

    public function store()
    {
        request()->validate([
            'gambar' => ['array', 'required'],
            'gambar.*' => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'judul' => ['required'],
        ]);

        $data_gambar = request()->file('gambar');
        foreach ($data_gambar as $key => $value) {
            $data = [
                'judul' => request('judul'),
                'gambar' => $value->store('galeri', 'public'),
            ];
            Galeri::create($data);
        }
        return redirect()->route('galeri.index')->with('success', 'Data berhasil disimpan!');
    }

    public function destroy($id)
    {
        $item = Galeri::findOrFail($id);
        FacadesStorage::disk('public')->delete($item->gambar);
        $item->delete();
        return redirect()->route('galeri.index')->with('success', 'Data berhasil dihapus!');
    }
}
