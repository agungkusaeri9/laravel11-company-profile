<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index()
    {
        $items = Testimoni::latest()->get();
        return view('pages.testimoni.index', [
            'title' => "Testimoni",
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.testimoni.create', [
            'title' => 'Buat Testimoni'
        ]);
    }

    public function store()
    {
        request()->validate([
            'foto' => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'nama' => ['required'],
            'jabatan' => ['required'],
            'deskripsi' => ['required'],
        ]);

        $data = request()->all();
        if (request()->hasFile('foto')) {
            $data['foto'] = request()->file('foto')->store('testimoni', 'public');
        }

        Testimoni::create($data);

        return redirect()->route('testimoni.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Testimoni::findOrFail($id);
        return view('pages.testimoni.edit', [
            'title' => 'Edit Testimoni',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'foto' => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'nama' => ['required'],
            'jabatan' => ['required'],
            'deskripsi' => ['required'],
        ]);

        $item = Testimoni::findOrFail($id);
        $data = request()->all();
        if (request()->hasFile('foto')) {
            if ($item->foto) {
                Storage::disk('public')->delete($item->foto);
            }
            $data['foto'] = request()->file('foto')->store('testimoni', 'public');
        }

        $item->update($data);

        return redirect()->route('testimoni.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $item = Testimoni::findOrFail($id);
        $item->delete();

        return redirect()->route('testimoni.index')->with('success', 'Data berhasil dihapus!');
    }
}
