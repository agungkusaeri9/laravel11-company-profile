@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Pesan Masuk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Data Pesan Masuk</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Data Pesan Masuk</h4>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table  table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="5">#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td width="5" class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->subjek }}</td>
                                            <td>{{ $item->pesan }}</td>
                                            <td>
                                                <form action="{{ route('pesan-masuk.destroy', $item->id) }}" id="formDelete"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button id="btnDelete"
                                                        data-action="{{ route('pesan-masuk.destroy', $item->id) }}"
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
