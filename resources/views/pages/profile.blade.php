@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->name }}</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <form method="post">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('profile.update') }}" method="post">
                                    @csrf
                                    <div class='form-group'>
                                        <label for='name' class='mb-2'>Name <span
                                                class='text-danger small'>*</span></label>
                                        <input type='text' name='name' id='name'
                                            class='form-control @error('name') is-invalid @enderror'
                                            value='{{ $user->name ?? old('name') }}'>
                                        @error('name')
                                            <div class='invalid-feedback'>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class='form-group'>
                                        <label for='email' class='mb-2'>Email <span
                                                class='text-danger small'>*</span></label>
                                        <input type='text' name='email' id='email'
                                            class='form-control @error('email') is-invalid @enderror'
                                            value='{{ $user->email ?? old('email') }}'>
                                        @error('email')
                                            <div class='invalid-feedback'>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class='form-group'>
                                        <label for='password' class='mb-2'>Password <span
                                                class='text-danger small'>*</span></label>
                                        <input type='password' name='password' id='password'
                                            class='form-control @error('password') is-invalid @enderror'
                                            value='{{ old('password') }}'>
                                        @error('password')
                                            <div class='invalid-feedback'>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class='form-group'>
                                        <label for='password_confirmation' class='mb-2'>Password Confirmation <span
                                                class='text-danger small'>*</span></label>
                                        <input type='password' name='password_confirmation' id='password_confirmation'
                                            class='form-control @error('password_confirmation') is-invalid @enderror'
                                            value='{{ old('password_confirmation') }}'>
                                        @error('password_confirmation')
                                            <div class='invalid-feedback'>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class='form-group float-right'>
                                        <button class='btn btn-primary'>Update</button>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
