<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaturanController extends Controller
{
    public function index()
    {
        $item = Pengaturan::first();
        return view('pages.pengaturan', [
            'title' => 'Pengaturan',
            'item' => $item
        ]);
    }

    public function update()
    {
        request()->validate([
            'nama_web' => ['required'],
            'deskripsi' => ['required'],
            'alamat' => ['required'],
            'email' => ['required'],
            'nomor_telepon' => ['required'],
            'nomor_wa' => ['required'],
            'link_instagram' => ['required'],
            'link_facebook' => ['required'],
            'link_tiktok' => ['required'],
            'logo' => ['image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'author' => ['required']
        ]);

        $item = Pengaturan::first();
        $data = request()->all();
        if (request()->hasFile('logo')) {
            if ($item->logo) {
                Storage::disk('public')->delete($item->logo);
            }
            $data['logo'] = request()->file('logo')->store('pengaturan', 'public');
        }
        $item->update($data);
        return redirect()->route('pengaturan.index')->with('success', 'Data berhasil diupdate!');
    }
}
