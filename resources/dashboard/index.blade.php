@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="mb-4">Dashboard Utama 👋</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Total Pengguna</div>
                        <div class="card-body">
                            <h2 class="card-title">{{ $totalUsers }}</h2>
                            <p class="card-text">Jumlah pengguna terdaftar di sistem.</p>
                        </div>
                    </div>
                </div>

                {{-- 
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Total Pendapatan</div>
                        <div class="card-body">
                            <h2 class="card-title">Rp. {{ number_format($totalRevenue) }}</h2>
                        </div>
                    </div>
                </div>
                --}}
            </div>

            <hr>

            {{-- Anda bisa menambahkan tabel data terbaru, chart, dll. di sini --}}
            {{-- 
            <h3>Aktivitas Terbaru</h3>
            <p>Tabel atau daftar aktivitas terbaru akan ditampilkan di sini.</p>
            --}}
        </div>
    </div>
</div>
@endsection