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
        @include('dashboard.kriteria.create')
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_kriteria">
            <thead class="table-dark dt-head-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Bobot</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kriterias as $k)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $k->nama_kriteria }}</td>
                        <td class="text-center">{{ $k->bobot_kriteria }}%</td>
                        <td class="text-center">
                            <a href="#edit{{ $k->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                            <a href="#delete{{ $k->id }}" class="btn btn-danger border-0" data-bs-toggle="modal">Hapus</a>
                        </td>
                        @include('dashboard.kriteria.edit')
                        @include('dashboard.kriteria.delete')
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
        $('#table_kriteria').DataTable({
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

    function createPersen() {
        const inputElement = document.getElementById('create_bobot_kriteria');
        const inputValue = inputElement.value;

        if (inputValue !== '') {
            inputElement.value = inputValue + '%';
        }
    }
    
    function editPersen() {
        const inputElement = document.getElementById('edit_bobot_kriteria');
        const inputValue = inputElement.value;

        if (inputValue !== '') {
            inputElement.value = inputValue + '%';
        }
    }
</script>
@endpush