@extends('layouts.main')
@include('partials.navbar')
@include('partials.sidebar')
@push('linkRel')
<!-- DataTable -->
<link rel="stylesheet" href={{ asset('vendor\DataTables\datatables.min.css') }}>
@endpush
@section('wrapper')
<div class="row">
    <div class="col mx-4 my-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="#create" class="btn btn-success" data-bs-toggle="modal">Tambah Akun Baru</a>
        @include('dashboard.akun.create')
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_akun">
            <thead class="table-dark dt-head-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $u->username }}</td>
                        <td class="text-center">
                            <a href="#show{{ $u->id }}" class="btn btn-primary border-0" data-bs-toggle="modal">Lihat</a>
                            <a href="#edit{{ $u->id }}" class="btn btn-warning border-0" data-bs-toggle="modal" onclick="saveId({{ $u->id }})">Edit</a>
                            <a href="#delete{{ $u->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                        </td>
                        @include('dashboard.akun.show')
                        @include('dashboard.akun.edit')
                        @include('dashboard.akun.delete')
                    </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
@push('script')
<!-- DataTable -->
<script src={{ asset('vendor\DataTables\datatables.min.js') }}></script>
<script>
    $(document).ready(function() {
        $('#table_akun').DataTable({
            // ordering: false,
            columnDefs: [{
                targets: '_all',
                className: 'dt-head-center'
            }]
        });
    });
    @if (count($errors) > 0)
    $(document).ready(function() {
        $('#create').modal('show');
    });
    @endif
</script>
@endpush