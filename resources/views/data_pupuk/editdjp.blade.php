@extends('tampilan.index')
@section('title','Halaman Ubah Data Jenis Pupuk')
@section('container')

<div class="content-header">
    <div class="container">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ubah Data Jenis Pupuk</h1>
        </div>
    </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @foreach($data as $djp)
                        <form action="/djp/{{ $djp->id_jenis_pupuk }}/postedjp" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Jenis Pupuk :</label>
                                <select class="form-control" id="nama" name="nama">
                                    <option value="{{$djp->nama}}">{{$djp->nama}}</option>
                                    <option value="UREA">UREA</option>
                                    <option value="ZA">ZA</option>
                                    <option value="SP-36">SP-36</option>
                                    <option value="PHONSKA">PHONSKA</option>
                                    <option value="PETROGANIK">PETROGANIK</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="satuan">Satuan :</label>
                                <div class="input-group">
                                    <input id="satuan" type="text" class="form-control" value="{{$djp->satuan}}"
                                        name="satuan" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga :</label>
                                <div class="input-group">
                                    <input id="harga" type="text" class="form-control" value="{{$djp->harga}}"
                                        name="harga" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ url('djp') }}" class="btn btn-danger">Batal</a>
                        </form>
                        @endforeach
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection