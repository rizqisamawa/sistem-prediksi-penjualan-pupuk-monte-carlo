@extends('tampilan.index')
@section('title','Halaman Tambah Data Penjualan Pupuk')
@section('container')

<div class="content-header">
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tambah Data Penjualan Pupuk</h1>
        </div>
    </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <form action="{{url('hitung')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                {{-- jenis pupuk --}}
                    <div class="col-3">
                        <div class="form-group">
                            <select class="form-control" id="nama" name="jenis_pupuk">
                                <option selected>Jenis Pupuk</option>
                                <option value="1">UREA</option>
                                <option value="2">ZA</option>
                                <option value="3">SP-36</option>
                                <option value="4">PHONSKA</option>
                                <option value="5">PETROGANIK</option>
                            </select>
                        </div>
                    </div>
                {{-- jenis pupuk --}}

                {{-- tahun --}}
                    <div class="col-3">
                        <div class="form-group">
                            <select class="form-control" id="nama" name="tahun">
                                <option selected>Tahun</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                    </div>
                {{-- tahun --}}
            </div>
        {{-- bulan --}}
            <div class="row justify-content-center">
                <div class="col-9">
                    <div class="form-group row">
                        <label for="Januari" class="col-sm-1 col-form-label mr-2">Januari</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Januari" placeholder="" name="Januari">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Febuari" class="col-sm-1 col-form-label mr-2">Febuari</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Febuari" placeholder="" name="Febuari">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Maret" class="col-sm-1 col-form-label mr-2">Maret</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Maret" placeholder="" name="Maret">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="April" class="col-sm-1 col-form-label mr-2">April</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="April" placeholder="" name="April">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Mei" class="col-sm-1 col-form-label mr-2">Mei</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Mei" placeholder="" name="Mei">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Juni" class="col-sm-1 col-form-label mr-2">Juni</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Juni" placeholder="" name="Juni">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Juli" class="col-sm-1 col-form-label mr-2">Juli</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Juli" placeholder="" name="Juli">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Agustus" class="col-sm-1 col-form-label mr-2">Agustus</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Agustus" placeholder="" name="Agustus">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="September" class="col-sm-1 col-form-label mr-2">September</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="September" placeholder="" name="September">
                        </div>
                    </div>
                    {{-- oktober - desember --}}
                    {{-- <div class="form-group row">
                        <label for="Oktober" class="col-sm-1 col-form-label mr-2">Oktober</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Oktober" placeholder="" name="Oktober">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="November" class="col-sm-1 col-form-label mr-2">November</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="November" placeholder="" name="November">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Desember" class="col-sm-1 col-form-label mr-2">Desember</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Desember" placeholder="" name="Desember">
                        </div>
                    </div> --}}
                    {{-- oktober - desember --}}
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                            <a href="{{ url('dpp') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        {{-- bulan --}}
        </form>
    </div>
  </div>

@endsection