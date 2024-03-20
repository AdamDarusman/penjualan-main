@extends('layouts.app')

@section('title', 'Form Penginapan')

@section('contents')
    <style>
        .color {
            background-color: #162527;
            color: #fff;
        }

        .colorButton {
            background-color: #162527;
            color: #fff;
        }

        .colorButton:hover {
            background-color: #3a7b85;
            color: #fff
        }

        .textColor {
            color: #162527;
        }
    </style>
    <form
        action="{{ isset($penginapan) ? route('penginapan.tambah.update', $penginapan->id) : route('penginapan.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($penginapan) ? 'Form Edit penginapan' : 'Form Tambah penginapan' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Wisata</label>
                            <input type="text" class="form-control" id="nama_penginapan" name="nama_penginapan"
                                value="{{ isset($penginapan) ? $penginapan->nama_penginapan : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                value="{{ isset($penginapan) ? $penginapan->deskripsi : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 1</label>
                            <input type="file" class="form-control" id="foto1" name="foto1"
                                value="{{ isset($penginapan) ? $penginapan->foto1 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 2</label>
                            <input type="file" class="form-control" id="foto2" name="foto2"
                                value="{{ isset($penginapan) ? $penginapan->foto2 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 3</label>
                            <input type="file" class="form-control" id="foto3" name="foto3"
                                value="{{ isset($penginapan) ? $penginapan->foto3 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 4</label>
                            <input type="file" class="form-control" id="foto4" name="foto4"
                                value="{{ isset($penginapan) ? $penginapan->foto4 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 5</label>
                            <input type="file" class="form-control" id="foto5" name="foto5"
                                value="{{ isset($penginapan) ? $penginapan->foto5 : '' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn colorButton">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
