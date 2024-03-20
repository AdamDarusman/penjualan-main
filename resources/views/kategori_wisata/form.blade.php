@extends('layouts.app')

@section('title', 'Form kategori Wisata')

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
        action="{{ isset($kategori_wisata) ? route('kategori_wisata.tambah.update', $kategori_wisata->id) : route('kategori_wisata.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($kategori_wisata) ? 'Form Edit kategori Wisata' : 'Form Tambah kategori Wisata' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama kategori Wisata</label>
                            <input type="text" class="form-control" id="kategori_wisata" name="kategori_wisata"
                                value="{{ isset($kategori_wisata) ? $kategori_wisata->kategori_wisata : '' }}">
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
