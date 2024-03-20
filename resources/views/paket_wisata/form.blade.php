@extends('layouts.app')

@section('title', 'Form Paket Wisata')

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
        action="{{ isset($paket_wisata) ? route('paket_wisata.tambah.update', $paket_wisata->id) : route('paket_wisata.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($paket_wisata) ? 'Form Edit paket wisata' : 'Form Tambah paket wisata' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Paket WIsata</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                                value="{{ isset($paket_wisata) ? $paket_wisata->nama_paket : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                value="{{ isset($paket_wisata) ? $paket_wisata->deskripsi : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Fasilitas</label>
                            <input type="text" class="form-control" id="deskripsifasilitas" name="fasilitas"
                                value="{{ isset($paket_wisata) ? $paket_wisata->fasilitas : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga Perpack</label>
                            <input type="number" class="form-control" id="harga_per_pack" name="harga_per_pack"
                                value="{{ isset($paket_wisata) ? $paket_wisata->harga_per_pack : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon"
                                value="{{ isset($paket_wisata) ? $paket_wisata->diskon : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 1</label>
                            <input type="file" class="form-control" id="foto1" name="foto1"
                                value="{{ isset($paket_wisata) ? $paket_wisata->foto1 : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto 2</label>
                            <input type="file" class="form-control" id="foto2" name="foto2"
                                value="{{ isset($paket_wisata) ? $paket_wisata->foto2 : '' }}">
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
