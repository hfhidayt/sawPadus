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
    </div>
</div>
<div class="row">
    <div class="col d-flex justify-content-center align-items-center">
        <form action="/dashboard/hitung" method="post">
            @csrf
            <input type="hidden" name="test" value="test">
            <button type="submit" class="btn btn-success btn-lg">Hitung!</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-4">
        <a href="/dashboard/detail" class="btn btn-success">Detail Perhitungan</a>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_hitung">
            <thead class="table-dark dt-head-center">
                <tr>
                    <th scope="col">Ranking</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Hasil</th>
                    <th scope="col">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perhitungans as $p)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $p->user->nama }}</td>
                        <td class="text-center">{{ $p->user->hasil }}</td>
                        <td class="text-center">{{ (round($p->nilai_vektor * 100, 2)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('script')
<!-- DataTable -->
<script src={{ asset('vendor\DataTables\datatables.min.js') }}></script>
<script>
    $(document).ready(function() {
        $('#table_hitung').DataTable({
            // ordering: false,
            columnDefs: [{
                targets: '_all',
                className: 'dt-head-center'
            }]
        });

        // $('#nama_anggota').select2({
        //     theme: 'bootstrap-5',
        //     dropdownParent: $('#create')
        // });
    });
</script>
@endpush