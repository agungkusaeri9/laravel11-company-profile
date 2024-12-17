@extends('frontend.layouts.app')

@section('content')
    <div class="container-xxl bg-dark page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">{{ $item->judul }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('page.portofolio') }}">Portofolio</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $item->judul }}</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Service Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="text-center">
                        <img src="{{ $item->gambar() }}" class="img-fluid" style="max-height:300px" alt="">
                    </div>
                    <p class="text-center mt-4">{!! $item->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
