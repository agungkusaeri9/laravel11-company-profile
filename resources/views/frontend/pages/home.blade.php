@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark hero-header" id="page_home">
        <div class="container">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-8 text-center">
                    <h3 class="text-white mb-4 animated zoomIn">Kami Membantu Bisnis Konveksi Anda Naik ke Tingkat
                        Selanjutnya</h3>
                    <p class="text-white pb-3 animated zoomIn text-muted">
                        Kami menyediakan solusi lengkap untuk meningkatkan efisiensi dan kualitas produksi konveksi Anda.
                        Dengan teknologi dan strategi yang tepat, kami membantu Anda mencapai hasil maksimal dalam waktu
                        singkat.
                    </p>
                    <a href="https://wa.me/{{ $pengaturan->nomor_wa }}" target="_blank"
                        class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight text-muted">Hubungi
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
                    <h2 class="mb-4">Solusi Terbaik untuk Mengembangkan Bisnis Konveksi Anda</h2>
                    <p class="mb-4">
                        Kami adalah mitra strategis bagi bisnis konveksi yang ingin meningkatkan kualitas produksi,
                        efisiensi, dan daya saing di pasar.
                        Dengan layanan konsultasi yang terintegrasi, kami membantu Anda mencapai target bisnis yang
                        maksimal.
                    </p>
                    <div class="row g-3 mb-4">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Perencanaan Produksi</h6>
                                <span>
                                    Kami membantu merancang strategi produksi yang efektif untuk meningkatkan produktivitas
                                    dan menekan biaya tanpa mengurangi kualitas.
                                </span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-chart-line text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Analisis Keuangan</h6>
                                <span>
                                    Layanan kami mencakup analisis mendalam untuk memastikan kesehatan finansial bisnis
                                    konveksi Anda
                                    dan membantu dalam pengambilan keputusan.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-6" id="page_contact">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
                <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
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
                                    <textarea class="form-control" name="pesan" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
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

    <!-- Service Start -->
    <div class="container-xxl py-6" id="page_service">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_layanan as $layanan)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="{{ route('page.detail-layanan', $layanan->slug) }}">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-3">{{ $layanan->nama }}</h5>
                                <span>{{ $layanan->deskripsi_singkat }}</span>
                            </div>
                        </div>
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
                    <h2 class="mb-4">Mengapa Memilih Kami? Mitra Terpercaya Bisnis Konveksi Anda</h2>
                    <p>
                        Kami adalah mitra strategis yang siap membantu bisnis konveksi Anda tumbuh dan berkembang.
                        Dengan pengalaman dan keahlian kami, kami memastikan proses produksi yang efisien dan hasil
                        yang berkualitas tinggi.
                    </p>
                    <p>
                        Fokus kami adalah memberikan solusi yang praktis, mulai dari perencanaan hingga evaluasi,
                        untuk mendukung setiap aspek kebutuhan bisnis konveksi Anda.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-tshirt text-white"></i>
                                </div>
                                <h6 class="mb-0">Kualitas Terbaik</h6>
                            </div>
                            <span>Kami menjamin hasil produksi berkualitas tinggi dengan bahan terbaik dan kontrol kualitas
                                yang ketat.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-cogs text-white"></i>
                                </div>
                                <h6 class="mb-0">Efisiensi Produksi</h6>
                            </div>
                            <span>Kami menggunakan teknologi modern untuk meningkatkan efisiensi dan mengurangi biaya
                                produksi.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h6 class="mb-0">Pengalaman Teruji</h6>
                            </div>
                            <span>Dengan pengalaman bertahun-tahun, kami telah membantu banyak bisnis mencapai
                                kesuksesan.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <h6 class="mb-0">Kepuasan Pelanggan</h6>
                            </div>
                            <span>Kami berkomitmen memberikan pelayanan terbaik untuk memastikan kepuasan pelanggan.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <h6 class="mb-0">Konsultan Profesional</h6>
                            </div>
                            <span>Kami menyediakan konsultasi ahli untuk membantu mengembangkan bisnis konveksi Anda.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <h6 class="mb-0">Dukungan Pelanggan 24/7</h6>
                            </div>
                            <span>Kami siap membantu Anda kapan saja untuk memastikan kebutuhan bisnis Anda
                                terpenuhi.</span>
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
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
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
@endsection
