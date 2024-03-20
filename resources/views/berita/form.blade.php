@extends('layouts.app')

@section('title', 'Form Berita')

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
    <form action="{{ isset($berita) ? route('berita.tambah.update', $berita->id) : route('berita.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold texColor">
                            {{ isset($berita) ? 'Form Edit berita' : 'Form Tambah berita' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ isset($berita) ? $berita->judul : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Berita</label>
                            <input type="text" class="form-control" id="berita" name="berita"
                                value="{{ isset($berita) ? $berita->berita : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Post</label>
                            <input type="date" class="form-control" id="tgl_post" name="tgl_post"
                                value="{{ isset($berita) ? $berita->tgl_post : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Id Kategor Berita</label>
                            {{-- <input type="number" class="form-control" id="id_kategori_berita" name="id_kategori_berita"
                                value="{{ isset($berita) ? $berita->id_kategori_berita : '' }}"> --}}
                            <select class="form-control" name="id_kategori_berita" id="id_kategori_berita">
                                <option value="">PILIH KATEGORI</option>
                                @foreach ($kategoriBerita as $item)
                                    <option class="form-control" value="{{ $item->id }}">
                                        {{ $item->kategori_berita }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                                value="{{ isset($berita) ? $berita->foto : '' }}">
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
