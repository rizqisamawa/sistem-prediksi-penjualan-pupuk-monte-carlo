@extends('tampilan.index')
@section('title', 'Halaman Data Jenis Pupuk')
@section('container')
    
    <div class="content-header">
        <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Jenis Pupuk</h1>
            </div>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
    
            @if(session('notif'))
              <div class="alert alert-success alert-dismissible fade show"  role="alert">
                  {{session('notif')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
    
                  <div class="col-12">
    
                    <div class="card">
                      {{-- tambah akun + pencarian --}}
                      <div class="card-header">
    
                        <div class="float-left">
                            <a href="{{url('createdjp')}}" class='btn btn-default bg-pink'>
                                <span class='fa fa-plus'></span> Tambah Data
                            </a>
                        </div>
    
                        <div class="card-tools">
                          <form class="input-group input-group-sm"  method="GET" action="/dat">
                              <input name="cari" class="form-control float-right bg-light" type="text" placeholder="Nama Jenis Pupuk">
                            <div class="input-group-append">
                              <button class="btn btn-default bg-pink" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                          </form> 
                        </div>
    
                      </div>
                      {{-- tambah akun + pencarian --}}
    
                      {{-- tabel --}}
                      <div class="card-body table-responsive" style="height: 450px;">
                        <table id="table" class="table table-head-fixed text-nowrap text-center display nowrap table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Nama Jenis Pupuk</th>
                              <th>Satuan</th>
                              <th>Total Harga</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $djp)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$djp->nama}}</td>
                              <td>{{$djp->satuan}}</td>
                              <td>{{$djp->harga}}</td>
                              <td>
                                <a href="/djp/{{$djp->id_jenis_pupuk}}/editdjp" class="badge badge-primary p-2">Ubah</a>
                                <span style="color:grey; font-weight:bold;" class="text-light">|</span>
                                <a href="/djp/{{$djp->id_jenis_pupuk}}/hapusdjp" class="badge badge-danger p-2">Hapus</a>
                                </td>
                              </td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{-- tabel --}}
                    </div>
                    
                  </div>
    
            </div>
          </div>
        </div>
      </div>
    
    @endsection
    
    @section('script')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
    
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 5,
            });
        });
    
    </script>

@endsection