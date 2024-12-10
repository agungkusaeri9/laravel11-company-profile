@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Portofolio</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Portofolio</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Data Portofolio</h4>
                            <a href="{{ route('portofolio.create') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-plus"></i>
                                Portofolio</a>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table  table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="5">#</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi Singkat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td width="5" class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ $item->gambar() }}" class="img-fluid" style="max-height:40px"
                                                    alt="">
                                            </td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->deskripsi_singkat }}</td>
                                            <td>
                                                <a href="{{ route('portofolio.edit', $item->id) }}"
                                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('portofolio.destroy', $item->id) }}" id="formDelete"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button id="btnDelete"
                                                        data-action="{{ route('portofolio.destroy', $item->id) }}"
                                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('body').on('click', '#btnDelete', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let action = $(this).data('action');
                        $('#formDelete').attr('action', action);
                        $('#formDelete').submit();
                    }
                })
            })
        })
    </script>
@endpush
