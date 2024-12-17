@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Testimoni</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimoni</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Testimonial Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-blue-custom px-4 mb-3">Testimoni</div>
                <h2 class="mb-5 text-blue-custom">Apa Kata Klien Kami!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($data_testimoni as $item)
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-blue-custom mb-3"></i>
                        <p>{{ $item->deskripsi }}
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ $item->foto() }}">
                            <div class="ps-3">
                                <h6 class="mb-1 text-blue-custom">{{ $item->nama }}</h6>
                                <small>{{ $item->jabatan }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
