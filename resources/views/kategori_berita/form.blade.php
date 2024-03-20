@extends('layouts.app')

@section('title', 'Form kategori Berita')

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
        action="{{ isset($kategori_berita) ? route('kategori_berita.tambah.update', $kategori_berita->id) : route('kategori_berita.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($kategori_berita) ? 'Form Edit kategori berita' : 'Form Tambah kategori berita' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama kategori berita</label>
                            <input type="text" class="form-control" id="kategori_berita" name="kategori_berita"
                                value="{{ isset($kategori_berita) ? $kategori_berita->kategori_berita : '' }}">
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
