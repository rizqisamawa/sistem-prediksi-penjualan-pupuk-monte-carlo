@extends('tampilan/index')
@section('title','Halaman Hasil Prediksi')
@section('container')

<div class="content-header">
    <div class="container">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Hasil Prediksi</h1>
        </div>
    </div>
    </div>
</div>  

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="card">
                    <div class="card-header">
                        {{-- print --}}
                            {{-- <div class="float-left ml-3">
                                <a href="" class="btn btn-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                    </svg>
                                    &nbsp Print
                                </a>
                            </div> --}}
                        {{-- print --}}

                        {{-- filter --}}
                        <form action="/hp" method="GET">
                            <div class="form-group float-right mr-5">
                                <button class="btn btn-default bg-success" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            {{-- filter jenis pupuk --}}
                                <div class="form-group float-right mr-2">
                                    <select class="form-control bg-light" name="jp">
                                        <option value="1">UREA</option>
                                        <option value="2">ZA</option>
                                        <option value="3">SP-36</option>
                                        <option value="4">PHONSKA</option>
                                        <option value="5">PETROGANIK</option>
                                    </select>
                                </div>
                            {{-- filter jenis pupuk --}}

                            {{-- filter tahun --}}
                                <div class="form-group float-right mr-2">
                                    <select class="form-control bg-light" name="thn">
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            {{-- filter tahun --}}
                            
                        </form>
                        {{-- filter --}}

                        {{-- tabel --}}
                            <div class="card-body table-responsive" style="height: 450px;">
                                <table id="table" class="table table-head text-nowrap text-center display nowrap table table-striped table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Bulan</th>
                                    <th>Terjual</th>
                                    <th>Bilangan Acak</th>
                                    <th>Hasil</th>
                                    <th>Error</th>
                                    <th>Presentasi Error</th>
                                    <th>Akurasi Presentasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hp as $dhp)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $dhp->bulan }}</td>
                                            <td>{{ $tj=$dhp->terjual }}</td>
                                            <td>{{ $ba = $dhp->nilai }}</td>
                                                @php
                                                    @$totalJ += $dhp->terjual;

                                                    foreach ($hp as $dhp) {
                                                        if ($ba >= $dhp->interval_awal && $ba <= $dhp->interval_akhir){
                                                                $hasil = $dhp->terjual;
                                                                // dd($hasil);
                                                            }
                                                        }
                                                    @$totalH += $hasil;
                                                @endphp
                                            <td>{{ $hasil }}</td>
                                            <td>{{ $error = abs($tj - $hasil) }}</td>
                                            <td>{{ $pe = round(($error / $tj)*100,1) }}</td>
                                            <td>{{ $ap = 100-$pe }}</td>
                                                @php
                                                    @$totalAP += $ap; 
                                                @endphp
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                                <tfoot class="bg-primary">
                                    <tr>
                                        <th>Total</th>
                                        <th>-</th>
                                        <th>{{ number_format($totalJ) }}</th>
                                        <th>-</th>
                                        <th>{{ $totalH }}</th>
                                        <th>-</th>
                                        <th>-</th>
                                        <th>{{ round($totalAP/9,1) . " %" }}</th>
                                    </tr>
                                </tfoot>
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
                  "ordering": false,
                  "info": false,
                  "autoWidth": false,
                  "responsive": true,
                  "pageLength": 9,
              });
          });
      
      </script>
@endsection