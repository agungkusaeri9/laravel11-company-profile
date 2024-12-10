<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $items = Layanan::latest()->get();
        return view('pages.layanan.index', [
            'title' => "Layanan",
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.layanan.create', [
            'title' => 'Buat Layanan'
        ]);
    }

    public function store()
    {
        request()->validate([
            'gambar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'nama' => ['required'],
            'deskripsi_singkat' => ['required'],
            'deskripsi' => ['required'],
        ]);

        $data = request()->all();
        if (request()->hasFile('gambar')) {
            $data['gambar'] = request()->file('gambar')->store('layanan', 'public');
        }
        Layanan::create($data);
        return redirect()->route('layanan.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Show the form for editing the specified Layanan item.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    /******  c63350ca-3d30-4c3d-b377-7f4409d4cd38  *******/
    public function edit($id)
    {
        $item = Layanan::findOrFail($id);
        return view('pages.layanan.edit', [
            'title' => 'Edit Layanan',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'gambar' => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'nama' => ['required'],
            'deskripsi_singkat' => ['required'],
            'deskripsi' => ['required'],
        ]);

        $item = Layanan::findOrFail($id);
        $data = request()->all();
        if (request()->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }
            $data['gambar'] = request()->file('gambar')->store('layanan', 'public');
        }

        $item->update($data);

        return redirect()->route('layanan.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $item = Layanan::findOrFail($id);
        Storage::disk('public')->delete($item->gambar);
        $item->delete();
        return redirect()->route('layanan.index')->with('success', 'Data berhasil dihapus!');
    }
}
