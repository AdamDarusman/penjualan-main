@extends('layouts.app')

@section('title', 'Form Obyek_Wisata')

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
        action="{{ isset($obyek_wisata) ? route('obyek_wisata.tambah.update', $obyek_wisata->id) : route('obyek_wisata.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($obyek_wisata) ? 'Form Edit obyek_wisata' : 'Form Tambah obyek_wisata' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Wisata</label>
                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->nama_wisata : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi_wisata" name="deskripsi_wisata"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->deskripsi_wisata : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Fasilitas</label>
                            <input type="text" class="form-control" id="fasilitas" name="fasilitas"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->fasilitas : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 1</label>
                            <input type="file" class="form-control" id="foto1" name="foto1"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->foto1 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 2</label>
                            <input type="file" class="form-control" id="foto2" name="foto2"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->foto2 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 3</label>
                            <input type="file" class="form-control" id="foto3" name="foto3"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->foto3 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 4</label>
                            <input type="file" class="form-control" id="foto4" name="foto4"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->foto4 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 5</label>
                            <input type="file" class="form-control" id="foto5" name="foto5"
                                value="{{ isset($obyek_wisata) ? $obyek_wisata->foto5 : '' }}">
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
