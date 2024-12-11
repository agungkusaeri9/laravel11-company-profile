<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Pengaturan;
use App\Models\PesanMasuk;
use App\Models\Portofolio;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $pengaturan = Pengaturan::first();
        return view('frontend.pages.home', [
            'pengaturan' => $pengaturan,
            'data_layanan' => Layanan::all(),
            'data_testimoni' => Testimoni::all(),
            'data_portofolio' => Portofolio::all()
        ]);
    }

    public function kontak()
    {
        return view('frontend.pages.kontak');
    }

    public function tentang()
    {
        $pengaturan = Pengaturan::first();
        return view('frontend.pages.tentang', [
            'pengaturan' => $pengaturan
        ]);
    }

    public function kontak_store()
    {
        request()->validate([
            'nama' => ['required'],
            'subjek' => ['required'],
            'pesan' => ['required'],
            'email' => ['required', 'email'],
        ]);

        $data = request()->all();
        PesanMasuk::create($data);
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function testimoni()
    {
        $data_testimoni = Testimoni::latest()->get();
        return view('frontend.pages.testimoni', [
            'title' => 'Testimonial',
            'data_testimoni' => $data_testimoni
        ]);
    }

    public function layanan()
    {
        $data_layanan = Layanan::latest()->get();
        return view('frontend.pages.layanan', [
            'title' => 'Layanan',
            'data_layanan' => $data_layanan
        ]);
    }

    public function detail_layanan($slug)
    {
        $item = Layanan::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.detail-layanan', [
            'title' => 'Detail Layanan',
            'item' => $item
        ]);
    }

    public function portofolio()
    {
        $data_portofolio = Portofolio::all();
        return view('frontend.pages.portofolio', [
            'title' => 'Portofolio',
            'data_portofolio' => $data_portofolio
        ]);
    }
    public function detail_portofolio($id)
    {
        $item = Portofolio::where('id', $id)->firstOrFail();
        return view('frontend.pages.detail-portofolio', [
            'title' => 'Detail portofolio',
            'item' => $item
        ]);
    }

    public function galeri()
    {
        $data_galeri = Galeri::all();
        return view('frontend.pages.galeri', [
            'title' => 'Galeri',
            'data_galeri' => $data_galeri
        ]);
    }
}
