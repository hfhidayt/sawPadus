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
        <a href="#create" class="btn btn-success" data-bs-toggle="modal">Tambah Kriteria Baru</a>
        @include('dashboard.nilai.create')
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_nilai">
            <thead class="table-dark dt-head-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    @foreach ($kriterias as $k)
                        <th scope="col">{{ $k->nama_kriteria }}</th>
                    @endforeach
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilais as $n)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $n->user->nama }}</td>
                        @foreach ($kriterias as $k)
                            @php
                                $t = strtolower($k->nama_kriteria);
                                $b = $n->$t;
                            @endphp
                            <td class="text-center">{{ $b }}</td>
                            {{-- <td class="text-center">{{ $n->wawancara }}</td> --}}
                        @endforeach
                        <td class="text-center">
                            <a href="#edit{{ $n->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                            <a href="#delete{{ $n->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                        </td>
                        {{-- @include('dashboard.kriteria.edit')
                        @include('dashboard.kriteria.delete') --}}
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
        $('#table_nilai').DataTable({
            // ordering: false,
            columnDefs: [{
                targets: '_all',
                className: 'dt-head-center'
            }]
        });
    });
</script>
@endpush