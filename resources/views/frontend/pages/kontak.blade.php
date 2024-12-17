@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-blue-custom px-4 mb-3">Hubungi Kami</div>
                <h2 class="mb-5 text-blue-custom">Ada Pertanyaan? Jangan Ragu untuk Menghubungi Kami!</h2>
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
    <!-- Contact End -->
@endsection
