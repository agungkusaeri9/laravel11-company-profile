@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark hero-header" id="page_home">
        <div class="container">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-8 text-center">
                    <h3 class="text-white mb-4 animated zoomIn">UD. Mitra Jaya Koveksi</h3>
                    <p class="text-white pb-3 animated zoomIn">
                        Solusi
                        Terbaik untuk Topi, Dasi Dan Bordir berkualitas
                    </p>
                    <a href="https://wa.me/{{ $pengaturan->nomor_wa }}" target="_blank"
                        class="btn btn-outline-light text-white rounded-pill border-2 py-3 px-5 animated slideInRight ">Hubungi
                        Kami</a>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- About Start -->
    <div class="container-xxl py-6" id="page_about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ $pengaturan->logo() }}" style="max-height:300px">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Tentang Kami</div>
                    <h2 class="mb-4">UD. Mitra Jaya Koveksi</h2>
                    <p class="mb-4">
                        UD. Mitra Jaya Konveksi, berdiri sejak tahun 2002, adalah usaha yang
                        bergerak di bidang produksi topi, dasi, dan bordir komputer berkualitas tinggi. Kami
                        melayani pembuatan produk dengan desain custom untuk kebutuhan pribadi, instansi,
                        atau perusahaan. Dengan didukung oleh tenaga profesional dan teknologi modern,
                        kami berkomitmen memberikan hasil terbaik yang presisi, tahan lama, dan sesuai
                        dengan kebutuhan anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-6" id="page_service">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">layanan Kami</div>
                <h2 class="mb-5">Solusi Terbaik untuk Kebutuhan Konveksi Anda</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_layanan as $layanan)
                    <a href="{{ route('page.detail-layanan', $layanan->slug) }}">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded h-100">
                                <div class="p-4">
                                    <div style="position: relative">
                                        <img src="{{ $layanan->gambar() }}" class="img-fluid"
                                            style="filter: brightness(0.5);height:250px;object-fit:cover" alt="">
                                        <div style="position: absolute;bottom:10px;left:10px;right:10px">
                                            <h5 class="mb-3 text-white" style="filter: brightness(0.9)">{{ $layanan->nama }}
                                            </h5>
                                            <span class="text-white"
                                                style="filter: brightness(0.9)">{{ \Str::limit($layanan->deskripsi_singkat, 100) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Portofolio -->
    <div class="container-xxl py-6" id="page_portofolio">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Portofolio Kami</div>
                <h2 class="mb-5">Menampilkan Proyek dan Keahlian Konveksi Kami</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_portofolio as $portofolio)
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s" style="background-color:#072a4f !important">
                        <a href="{{ route('page.detail-portofolio', $portofolio->id) }}">
                            <div class="service-item rounded h-100">
                                <div class="p-4">
                                    <img src="{{ $portofolio->gambar() }}" class="img-fluid mb-3" alt="">
                                    <h5 class="mb-3 text-white">{{ $portofolio->judul }}</h5>
                                    <span class="text-white">{{ $portofolio->deskripsi_singkat }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Keunggulan Kami</div>
                    <h2 class="mb-4">“Mengapa Memilih UD. Mitra Jaya Konveksi?</h2>
                    <p>
                        “UD. Mitra Jaya Konveksi, berdiri sejak 2002, memprioritaskan kualitas dan
                        kecepatan dalam pembuatan topi, dasi, dan bordir komputer. Kami menyediakan layanan
                        dengan desain fleksibel yang dapat disesuaikan kebutuhan, didukung teknologi modern dan
                        tim profesional, serta menawarkan harga bersaing untuk kepuasan pelanggan.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-tshirt text-white"></i>
                                </div>
                                <h6 class="mb-0">Berpengalaman Sejak 2002 </h6>
                            </div>
                            <span>Dengan lebih dari 20 tahun pengalaman, kami telah dipercaya oleh berbagai pelanggan
                                dari berbagai sektor. </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-cogs text-white"></i>
                                </div>
                                <h6 class="mb-0">Kualitas Terjamin</h6>
                            </div>
                            <span>Menggunakan bahan terbaik dan teknologi bordir komputer modern untuk memastikan
                                hasil yang presisi, rapi, dan tahan lama.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h6 class="mb-0">Custom Desain</h6>
                            </div>
                            <span>Kami melayani pembuatan produk dengan desain yang dapat disesuaikan sepenuhnya
                                dengan kebutuhan dan keinginan pelanggan. </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <h6 class="mb-0">Pelayanan Profesional </h6>
                            </div>
                            <span>Tim kami yang berpengalaman siap memberikan solusi terbaik, mulai dari konsultasi
                                desain hingga proses produksi.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <h6 class="mb-0">Harga Kompetitif </h6>
                            </div>
                            <span>Menawarkan harga yang bersaing tanpa mengurangi kualitas produk dan pelayanan. </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <h6 class="mb-0">Tepat Waktu </h6>
                            </div>
                            <span>Komitmen kami adalah mengirimkan pesanan tepat waktu sesuai dengan jadwal yang
                                telah disepakati. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-xxl" id="page_testi">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimoni</div>
                <h2 class="mb-5">Apa Kata Klien Kami!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($data_testimoni as $test)
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{ $test->deskripsi }}
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ $test->foto() }}">
                            <div class="ps-3">
                                <h6 class="mb-1">{{ $test->nama }}</h6>
                                <small>{{ $test->jabatan }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    {{-- contact us --}}
    <div class="container-xxl py-6" id="page_contact">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Hubungi Kami</div>
                <h2 class="mb-5">Ada Pertanyaan? Jangan Ragu untuk Menghubungi Kami!</h2>
            </div>
            @if (session('success'))
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="alert alert-success">
                            <strong>Berhasil!</strong>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <form method="post" action="{{ route('kontak.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="nama"
                                        placeholder="Your Name">
                                    <label for="nama">Your Name</label>
                                </div>
                                @error('nama')
                                    <div class='text-danger'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                                @error('email')
                                    <div class='text-danger'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subjek" class="form-control" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                                @error('subjek')
                                    <div class='text-danger'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="pesan" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                                @error('pesan')
                                    <div class='text-danger'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
