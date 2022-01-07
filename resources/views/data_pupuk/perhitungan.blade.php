@extends('tampilan.index')
@section('title','Halaman Perhitungan Data Penjualan Pupuk')
@section('container')

<div class="content-header">
    <div class="container">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Perhitungan Data Penjualan Pupuk</h1>
        </div>
    </div>
    </div>
</div> 

@php
    $totalP = $Januari+$Febuari+$Maret+$April+$Mei+$Juni+$Juli+$Agustus+$September;
    // $totalP = $Januari+$Febuari+$Maret+$April+$Mei+$Juni+$Juli+$Agustus+$September+$Oktober+$November+$Desember;
@endphp
<form action="/perhitungan" method="post">
  @csrf
    <div class="container ml-2 text-bold text-center">
        <div class="row justify-content-center">
            <div class="col-3">
                <p>Tahun :<span class="ml-2">{{ $tahun }}<input type="hidden" name="tahun" value="{{ $tahun }}"></span></p>
            </div>
            <div class="col-3">
                <p>Jenis Pupuk :<span class="ml-2">{{ $jenis_pupuk }}<input type="hidden" name="jenis_pupuk" value="{{ $jenis_pupuk }}"></span></p>
            </div>
            <div class="col-3">
                <p>Total Penjualan :<span class="ml-2">{{ $totalP }}</span></p>
            </div>
            <div class="col-3">
                <button class="btn btn-success px-5 mb-2" type="submit">+ SIMPAN</button>
            </div>
        </div>
    </div>

@php
    $b1 = "Januari";
    $b2 = "Febuari";
    $b3 = "Maret";
    $b4 = "April";
    $b5 = "Mei";
    $b6 = "Juni";
    $b7 = "Juli";
    $b8 = "Agustus";
    $b9 = "September";
    // $b10 = "Oktober";
    // $b11 = "November";
    // $b12 = "Desember";
@endphp

@php
    $n1 = 1;
    $n2 = 2;
    $n3 = 3;
    $n4 = 4;
    $n5 = 5;
    $n6 = 6;
    $n7 = 7;
    $n8 = 8;
    $n9 = 9;
    $n10 = 10;
    $n11 = 11;
    $n12 = 12;
@endphp

    <div class="container">
        <table class="table table-striped text-center">
            <thead class="bg-white">
              <tr>
                <th scope="col" rowspan="2">No</th>
                <th scope="col" rowspan="2">Bulan</th>
                <th scope="col" rowspan="2">Jumlah Penjualan</th>
                <th scope="col" rowspan="2">D Probabilitas</th>
                <th scope="col" rowspan="2">D P Kumulatif</th>
                <th scope="col" colspan="2">Interval</th>
              </tr>
              <tr>
                  <th>Awal</th>
                  <th>Akhir</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $n1 }}<input type="hidden" name="n1" value="{{ $n1 }}"></th>
                <td>{{ $b1 }}<input type="hidden" name="b1" value="{{ $b1 }}"></td>
                <td>{{ $Januari }}<input type="hidden" name="januari" value="{{ $Januari }}"></td>
                <td>{{ $p1 = number_format($Januari / $totalP, 2) }}</td>
                <td>{{ number_format(@$probkum += $p1,2) }}</td>
                <td>@php $awal1 = 0; @endphp {{ $awal1 }}<input type="hidden" name="awal1" value="{{ $awal1 }}"></td>
                <td>{{ $akhir1 = $probkum * 100 }}<input type="hidden" name="akhir1" value="{{ $akhir1 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n2 }}<input type="hidden" name="n2" value="{{ $n2 }}"></th>
                <td>{{ $b2 }}<input type="hidden" name="b2" value="{{ $b2 }}"></td>
                <td>{{ $Febuari }}<input type="hidden" name="febuari" value="{{ $Febuari }}"></td>
                <td>{{ $p2 = number_format($Febuari / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p2,2) }}</td>
                <td>@php $awal2 = $akhir1+1 @endphp {{ $awal2 }}<input type="hidden" name="awal2" value="{{ $awal2 }}"></td>
                <td>{{ $akhir2 = $probkum * 100 }}<input type="hidden" name="akhir2" value="{{ $akhir2 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n3 }}<input type="hidden" name="n3" value="{{ $n3 }}"></th>
                <td>{{ $b3 }}<input type="hidden" name="b3" value="{{ $b3 }}"></td>
                <td>{{ $Maret }}<input type="hidden" name="maret" value="{{ $Maret }}"></td>
                <td>{{ $p3 = number_format($Maret / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p3,2) }}</td>
                <td>@php $awal3 = $akhir2+1; @endphp {{ $awal3 }}<input type="hidden" name="awal3" value="{{ $awal3 }}"></td>
                <td>{{ $akhir3 = $probkum * 100 }}<input type="hidden" name="akhir3" value="{{ $akhir3 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n4 }}<input type="hidden" name="n4" value="{{ $n4 }}"></th>
                <td>{{ $b4 }}<input type="hidden" name="b4" value="{{ $b4 }}"></td>
                <td>{{ $April }}<input type="hidden" name="april" value="{{ $April }}"></td>
                <td>{{ $p4 = number_format($April / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p4,2) }}</td>
                <td>@php $awal4 = $akhir3+1; @endphp {{ $awal4 }}<input type="hidden" name="awal4" value="{{ $awal4 }}"></td>
                <td>{{ $akhir4 = $probkum * 100 }}<input type="hidden" name="akhir4" value="{{ $akhir4 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n5 }}<input type="hidden" name="n5" value="{{ $n5 }}"></th>
                <td>{{ $b5 }}<input type="hidden" name="b5" value="{{ $b5 }}"></td>
                <td>{{ $Mei }}<input type="hidden" name="mei" value="{{ $Mei }}"></td>
                <td>{{ $p5 = number_format($Mei / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p5,2) }}</td>
                <td>@php $awal5 = $akhir4+1; @endphp {{ $awal5 }}<input type="hidden" name="awal5" value="{{ $awal5 }}"></td>
                <td>{{ $akhir5 = $probkum * 100 }}<input type="hidden" name="akhir5" value="{{ $akhir5 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n6 }}<input type="hidden" name="n6" value="{{ $n6 }}"></th>
                <td>{{ $b6 }}<input type="hidden" name="b6" value="{{ $b6 }}"></td>
                <td>{{ $Juni }}<input type="hidden" name="juni" value="{{ $Juni }}"></td>
                <td>{{ $p6 = number_format($Juni / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p6,2) }}</td>
                <td>@php $awal6 = $akhir5+1; @endphp {{ $awal6 }}<input type="hidden" name="awal6" value="{{ $awal6 }}"></td>
                <td>{{ $akhir6 = $probkum * 100 }}<input type="hidden" name="akhir6" value="{{ $akhir6 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n7 }}<input type="hidden" name="n7" value="{{ $n7 }}"></th>
                <td>{{ $b7 }}<input type="hidden" name="b7" value="{{ $b7 }}"></td>
                <td>{{ $Juli }}<input type="hidden" name="juli" value="{{ $Juli }}"></td>
                <td>{{ $p7 = number_format($Juli / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p7,2) }}</td>
                <td>@php $awal7 = $akhir6+1; @endphp {{ $awal7 }}<input type="hidden" name="awal7" value="{{ $awal7 }}"></td>
                <td>{{ $akhir7 = $probkum * 100 }}<input type="hidden" name="akhir7" value="{{ $akhir7 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n8 }}<input type="hidden" name="n8" value="{{ $n8 }}"></th>
                <td>{{ $b8 }}<input type="hidden" name="b8" value="{{ $b8 }}"></td>
                <td>{{ $Agustus }}<input type="hidden" name="agustus" value="{{ $Agustus }}"></td>
                <td>{{ $p8 = number_format($Agustus / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p8,2) }}</td>
                <td>@php $awal8 = $akhir7+1; @endphp {{ $awal8 }}<input type="hidden" name="awal8" value="{{ $awal8 }}"></td>
                <td>{{ $akhir8 = $probkum * 100 }}<input type="hidden" name="akhir8" value="{{ $akhir8 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n9 }}<input type="hidden" name="n9" value="{{ $n9 }}"></th>
                <td>{{ $b9 }}<input type="hidden" name="b9" value="{{ $b9 }}"></td>
                <td>{{ $September }}<input type="hidden" name="september" value="{{ $September }}"></td>
                <td>{{ $p9 = number_format($September / $totalP, 2) }}</td>
                <td>{{ number_format($probkum += $p9,2) }}</td>
                <td>@php $awal9 = $akhir8+1; @endphp {{ $awal9 }}<input type="hidden" name="awal9" value="{{ $awal9 }}"></td>
                <td>{{ $akhir9 = $probkum * 100 }}<input type="hidden" name="akhir9" value="{{ $akhir9 }}"></td>
              </tr>
              {{-- oktober - desember --}}
              {{-- <tr>
                <th scope="row">{{ $n10 }}<input type="hidden" name="n10" value="{{ $n10 }}"></th>
                <td>{{ $b10 }}<input type="hidden" name="b10" value="{{ $b10 }}"></td>
                <td>{{ $Oktober }}<input type="hidden" name="oktober" value="{{ $Oktober }}"></td>
                <td>{{ $p10 = round($Oktober / $totalP, 2) }}</td>
                <td>{{ $probkum += $p10 }}</td>
                <td>@php $awal10 = $akhir9+1; @endphp {{ $awal10 }}<input type="hidden" name="awal10" value="{{ $awal10 }}"></td>
                <td>{{ $akhir10 = $probkum * 100 }}<input type="hidden" name="akhir10" value="{{ $akhir10 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n11 }}<input type="hidden" name="n11" value="{{ $n11 }}"></th>
                <td>{{ $b11 }}<input type="hidden" name="b11" value="{{ $b11 }}"></td>
                <td>{{ $November }}<input type="hidden" name="november" value="{{ $November }}"></td>
                <td>{{ $p11 = round($November / $totalP, 2) }}</td>
                <td>{{ $probkum += $p11 }}</td>
                <td>@php $awal11 = $akhir10+1; @endphp {{ $awal11 }}<input type="hidden" name="awal11" value="{{ $awal11 }}"></td>
                <td>{{ $akhir11 = $probkum * 100 }}<input type="hidden" name="akhir11" value="{{ $akhir11 }}"></td>
              </tr>
              <tr>
                <th scope="row">{{ $n12 }}<input type="hidden" name="n12" value="{{ $n12 }}"></th>
                <td>{{ $b12 }}<input type="hidden" name="b12" value="{{ $b12 }}"></td>
                <td>{{ $Desember }}<input type="hidden" name="desember" value="{{ $Desember }}"></td>
                <td>{{ $p12 = round($Desember / $totalP, 2) }}</td>
                <td>{{ $probkum += $p12 }}</td>
                <td>@php $awal12 = $akhir11+1; @endphp {{ $awal12 }}<input type="hidden" name="awal12" value="{{ $awal12 }}"></td>
                <td>{{ $akhir12 = $probkum * 100 }}<input type="hidden" name="akhir12" value="{{ $akhir12 }}"></td>
              </tr> --}}
              {{-- oktober - desember --}}
            @php
                $totalDP = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9;
                // $totalDP = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12;
            @endphp
            </tbody>
            <tfoot class="bg-dark">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>{{ $totalP }}</td>
                    <td>-</td>
                    {{-- <td>{{ $totalDP }}</td> --}}
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
            </tfoot>
        </table>          
    </div>
</form>
@endsection