@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">Galeri</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <div class="container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Photo Gallery</div>
                <h2 class="mb-5">Capturing Moments and Memories</h2>
            </div>
            <div class="row g-4">
                @foreach ($data_galeri as $galeri)
                    <div class="col-md-4 mb-3">
                        <a href="{{ $galeri->gambar() }}" data-toggle="lightbox">
                            <img src="{{ $galeri->gambar() }}" class="img-fluid" style="object-fit: cover;max-height:300px">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
@endpush
