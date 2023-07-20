@extends('layouts.main')
@include('partials.navbar')
@include('partials.sidebar')
@section('wrapper')
    <h1>Selamat Datang, {{ auth()->user()->nama }}</h1>
@endsection