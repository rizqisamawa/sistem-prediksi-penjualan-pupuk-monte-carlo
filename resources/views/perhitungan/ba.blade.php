@extends('tampilan.index')
@section('title', 'Halaman Bilangan Acak')
@section('container')
    
    <div class="content-header">
        <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bilangan Acak</h1>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="/hitungba" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row text-center">
                            <label for="K" class="col-sm-1 col-form-label form-control bg-red">A</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-center" id="K" value="10" name="k">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <label for="G" class="col-sm-1 col-form-label form-control bg-red">C</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-center" id="G" value="20" name="g">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <label for="Z" class="col-sm-1 col-form-label form-control bg-red">X</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-center" id="Z" value="69" name="z">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <label for="M" class="col-sm-1 col-form-label form-control bg-red">M</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-center" id="M" value="99" name="m">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                                <button type="submit" class="btn btn-info col-lg-11" name="hitung">Hitung</button>
                        </div>
                    </div>
                </form>

                    <div class="row">
                        <div class="col-lg-11">
                            @section('notif')
                            <div class="alert alert-success alert-dismissible fade show"  role="alert">
                                {{session('notif')}} Bilangan Acak
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endsection
                        </div>
                    </div>
                        
            </div>
        </div>
    </div>

@endsection
    