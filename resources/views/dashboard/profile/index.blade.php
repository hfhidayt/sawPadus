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
    <div class="col mx-3 my-3">
        <table style="width: 25%;">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $profil[0]->nama }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $profil[0]->nim }}</td>
                </tr>
                <tr>
                    <td>Jusuran</td>
                    <td>:</td>
                    <td>{{ $profil[0]->jurusan }}</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col my-3">
                <a href="#edit{{ auth()->user()->id }}" class="btn btn-warning border-0" data-bs-toggle="modal">Edit</a>
                @include('dashboard.profile.edit')
            </div>
        </div>
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