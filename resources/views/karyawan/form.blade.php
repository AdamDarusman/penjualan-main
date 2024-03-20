@extends('layouts.app')

@section('title', 'Form Karyawan')

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
    <form action="{{ isset($karyawan) ? route('karyawan.tambah.update', $karyawan->id) : route('karyawan.tambah.simpan') }}"
        method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($karyawan) ? 'Form Edit karyawan' : 'Form Tambah karyawan' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan"
                                value="{{ isset($karyawan) ? $karyawan->nama_karyawan : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ isset($karyawan) ? $karyawan->alamat : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Handphone</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp"
                                value="{{ isset($karyawan) ? $karyawan->no_hp : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option value="Administrasi">Administrasi</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Pemilik">Pemilik</option>
                            </select>
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
