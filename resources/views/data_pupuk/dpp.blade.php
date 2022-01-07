@extends('tampilan.index')
@section('title', 'Halaman Data Penjualan Pupuk')
@section('container')
    
    <div class="content-header">
        <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Penjualan Pupuk</h1>
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
                            <a href="{{url('createdpp')}}" class='btn btn-default bg-purple'>
                                <span class='fa fa-plus'></span> Tambah Data
                            </a>
                        </div>
    
                      </div>
                      {{-- tambah akun + pencarian --}}
    
                      {{-- tabel --}}
                      <div class="card-body table-responsive" style="height: 450px;">
                        <table id="table" class="table text-nowrap text-center display nowrap table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Jenis Pupuk</th>
                              <th>Tahun</th>
                              <th>Bulan</th>
                              <th>Terjual</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($dpp as $dp)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$dp->nama}}</td>
                              <td>{{$dp->tahun}}</td>
                              <td>{{$dp->bulan}}</td>
                              <td>{{$dp->terjual}}</td>
                              <td>
                                {{-- <a href="/djp/{{$dp->id_dp}}/editdjp" class="badge badge-primary p-2">Ubah</a>
                                <span style="color:grey; font-weight:bold;" class="text-light">|</span> --}}
                                <a href="/djp/{{$dp->id_dp}}/hapusdjp" class="badge badge-danger p-2">Hapus</a>
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
                  "pageLength": 9,
              });
          });
      
      </script>
    @endsection