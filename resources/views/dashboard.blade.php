@extends('tampilan/index')
@section('title','Halaman Dashboard')
@section('container')


    <div class="content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header mt-3">

                            <div class="row justify-content-center">
                                <div class="col-md-3 col-sm-6 col-12">
                                    {{-- card 1 --}}
                                        <div class="info-box bg-danger">
                                            <span class="info-box-icon"><i class="nav-icon fab fa-typo3"></i></span>
                            
                                            <div class="info-box-content text-center font-weight-bold">
                                                <span class="info-box-text">Data Jenis Pupuk</span>
                                                                            
                                                <span class="info-box-number">
                                                    <h1>{{ $c1 }}</h1>
                                                </span>
                                            </div>
                                        </div>
                                    {{-- card 1 --}}
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    {{-- card 2 --}}
                                        <div class="info-box bg-warning">
                                            <span class="info-box-icon"><i class="nav-icon fas fa-archive"></i></span>
                            
                                            <div class="info-box-content text-center font-weight-bold">
                                                <span class="info-box-text">Data Penjualan Pupuk</span>
                                                                            
                                                <span class="info-box-number">
                                                    <h1>{{ $c2 }}</h1>
                                                </span>
                                            </div>
                                        </div>
                                    {{-- card 2 --}}
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    {{-- card 3 --}}
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="nav-icon fas fa-poll-h"></i></span>
                            
                                            <div class="info-box-content text-center font-weight-bold">
                                                <span class="info-box-text">Hasil Prediksi</span>
                                                                            
                                                <span class="info-box-number">
                                                    <h1>{{ $c3 }}</h1>
                                                </span>
                                            </div>
                                        </div>
                                    {{-- card 3 --}}
                                </div>
                            </div>

                        </div>
                        <div class="card-body mt-2 p-5">
                            <h4 class="font-weight-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
                                &nbsp Informasi Tentang Sistem
                            </h4>
                            <div class="ml-5">
                                <ul class="font-weight-bold" style="font-size: 18px">
                                    <li>Jenis pupuk berisikan tentang informasi tentang pupuk</li>
                                    <li>Data penjualan pupuk berisikan informasi tentang jumlah yang terjual dari setiap jenis pupuk</li>
                                    <li>Bilangan acak merupakan bagian dari langkah-langkah perhitungan metode Monte Carlo</li>
                                    <li>Hasil prediksi merupakan hasil dari semua perhitungan Monte Carlo dari langkah 1 - 5</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection