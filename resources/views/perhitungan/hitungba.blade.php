@extends('tampilan.index')
@section('title', 'Halaman Hasil Perhitungan Bilangan Acak')
@section('container')
    
    <div class="content-header">
        <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hasil Perhitungan Bilangan Acak</h1>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="/simpanba" method="post">
                    @csrf
                    <div class="card-body">
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil1 }}" name="hasil1" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil2 }}" name="hasil2" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil3 }}" name="hasil3" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil4 }}" name="hasil4" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil5 }}" name="hasil5" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil6 }}" name="hasil6" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil7 }}" name="hasil7" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil8 }}" name="hasil8" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil9 }}" name="hasil9" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil10 }}" name="hasil10" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil11 }}" name="hasil11" readonly>
                                </div>
                            </div>
                            <div class="form-group row text-center justify-content-center">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control text-center" id="K" value="{{ $hasil12 }}" name="hasil12" readonly>
                                </div>
                            </div>
                        
                        <div class="form-group row text-center justify-content-center">
                            <button type="submit" name="button" class="btn btn-success col-sm-9">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
    