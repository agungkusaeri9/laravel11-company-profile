<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $items = Portofolio::orderBy('judul', 'ASC')->get();
        return view('pages.portofolio.index', [
            'title' => 'Date Portofolio',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.portofolio.create', [
            'title' => 'Buat Portofolio'
        ]);
    }

    public function store()
    {
        request()->validate([
            'judul' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi' => 'required',
            'gambar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048']
        ]);

        $data = request()->all();
        $data['gambar'] = request()->file('gambar')->store('portofolio', 'public');
        Portofolio::create($data);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dibuat.');
    }

    public function edit($id)
    {
        $item = Portofolio::findOrFail($id);
        return view('pages.portofolio.edit', [
            'title' => 'Edit Portofolio',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'judul' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi' => 'required',
            'gambar' => ['image', 'mimes:jpg,png,jpeg', 'max:2048']
        ]);

        $item = Portofolio::findOrFail($id);
        if (request()->file('gambar')) {
            Storage::disk('public')->delete($item->gambar);
            $data = request()->all();
            $data['gambar'] = request()->file('gambar')->store('portofolio', 'public');
            $item->update($data);
        } else {
            $data = request()->except('gambar');
            $item->update($data);
        }

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diupdate.');
    }

    public function destroy($id)
    {
        $item = Portofolio::findOrFail($id);
        Storage::disk('public')->delete($item->gambar);
        $item->delete();
        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus.');
    }
}
