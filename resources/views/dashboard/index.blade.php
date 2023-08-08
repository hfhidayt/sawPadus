@extends('layouts.main')
@include('partials.navbar')
@include('partials.sidebar')
@section('wrapper')
<div class="row">
    <div class="col mx-3 my-3 text-center">
        <h1>Selamat Datang</h1>
            <h1 class="mb-3">{{ auth()->user()->nama }}</h1>
    </div>
</div>
@can('anggota')
<div class="row">
    <div class="col mx-3 my-3">
        <table style="width: 25%;">
            <tbody>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ auth()->user()->nim }}</td>
                </tr>
                <tr>
                    <td>Jusuran</td>
                    <td>:</td>
                    <td>{{ auth()->user()->jurusan }}</td>
                </tr>
            </tbody>
        </table>
        <hr style="border-top: 2px solid black;">
    </div>
</div>
<div class="row">
    <div class="col mx-3 my-3">
        <table class="table">
            <thead class="text-center">
                <tr>
                    @foreach ($kriterias as $k)
                        <th scope="col">{{ $k->nama_kriteria }}</th>
                    @endforeach
                    <th scope="col">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilais as $n)
                    <tr>
                        @foreach ($kriterias as $k)
                            @php
                                $t = strtolower($k->nama_kriteria);
                                $b = $n->$t;
                            @endphp
                            <td class="text-center">{{ $b }}</td>
                        @endforeach
                        @if ($perhitungans->count() == 0)
                            <td class="text-center">Belum Dinilai</td>
                        @else
                            <td class="text-center">{{ ($perhitungans[0]->nilai_vektor * 100) }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@if ($perhitungans->count() != 0)
<div class="row">
    <div class="col mx-3 my-3 text-center">
        <h5>
            Saudara/i Dinyatakan <b>{{ auth()->user()->hasil }}</b> menjadi anggota paduan suara Universitas Teknologi Digital Indonesia
        </h5>
    </div>
</div>
<div class="row">
    <div class="col mx-3 my-3 text-center">
        <h5>
            Terima kasih atas partisipasi saudara/i
        </h5>
    </div>
</div>
@endif
@endcan
<div class="row">
    <div class="col mx-3 my-3 text-center">
        <h3>Penerapan Metode Simple Additive Weighting Dalam Sistem Penerimaan Calon Anggota Paduan Suara Mahasiswa</h3>
        <h3>Universitas Teknologi Digital Indonesia</h3>
        <h3>Yogyakarta</h3>
        <h3>{{ date('Y') }}</h3>
    </div>
</div>
@endsection