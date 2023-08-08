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
    <div class="col mx-4">
        <h3>Matriks X</h3>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_matriks_x">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Nama</th>
                    @foreach ($kriterias as $k)
                        <th scope="col" class="text-center">{{ $k->nama_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($nilais as $n)
                    <tr>
                        <td class="text-center">{{ $n->user->nama }}</td>
                        @foreach ($kriterias as $k)
                            @php
                                $t = strtolower($k->nama_kriteria);
                                $b = $n->$t;
                            @endphp
                            <td class="text-center">{{ $b }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col mx-4 mt-4">
        <h3>Nilai Max</h3>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_max_min">
            <thead class="table-dark">
                <tr>
                    @foreach ($kriterias as $k)
                        <th scope="col" class="text-center">{{ $k->nama_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($maxs as $m)
                        <td class="text-center">{{ $m }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col mx-4 mt-4">
        <h3>Normalisasi</h3>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_max_min">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Nama</th>
                    @foreach ($kriterias as $k)
                        <th scope="col" class="text-center">{{ $k->nama_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($perhitungans as $h)
                    <tr>
                        <td class="text-center">{{ $h->user->nama }}</td>
                        @foreach ($kriterias as $k)
                            @php
                                $t = 'normalisasi_'.strtolower($k->nama_kriteria);
                                $b = $h->$t;
                            @endphp
                            <td class="text-center">{{ $b }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col mx-4 mt-4">
        <h3>Bobot</h3>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_max_min">
            <thead class="table-dark">
                <tr>
                    @foreach ($kriterias as $k)
                        <th scope="col" class="text-center">{{ $k->nama_kriteria }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($kriterias as $k)
                        <td class="text-center">{{ $k->bobot_kriteria }}%</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col mx-4 mt-4">
        <h3>Nilai Vektor</h3>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_max_min">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Nama</th>
                    @foreach ($kriterias as $k)
                        <th scope="col" class="text-center">{{ $k->nama_kriteria }}</th>
                    @endforeach
                    <th scope="col" class="text-center">Nilai Vektor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perhitungans as $h)
                    <tr>
                        <td class="text-center">{{ $h->user->nama }}</td>
                        @foreach ($kriterias as $k)
                            @php
                                $t = 'vektor_'.strtolower($k->nama_kriteria);
                                $b = $h->$t;
                            @endphp
                            <td class="text-center">{{ $b }}</td>
                        @endforeach
                        <td class="text-center">{{ $h->nilai_vektor }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col mx-4 mt-4">
        <h3>Perankingan</h3>
    </div>
</div>
<div class="row">
    <div class="col mx-4 my-3">
        <table class="table" id="table_max_min">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Ranking</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Nilai Vektor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rankings as $r)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $r->user->nama }}</td>
                        <td class="text-center">{{ $r->nilai_vektor }}</td>
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
@endpush