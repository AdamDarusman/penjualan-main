@extends('layouts.app')

@section('title', 'Form Pelanggan')

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
        action="{{ isset($pelanggan) ? route('pelanggan.tambah.update', $pelanggan->id) : route('pelanggan.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($pelanggan) ? 'Form Edit pelanggan' : 'Form Tambah pelanggan' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                value="{{ isset($pelanggan) ? $pelanggan->nama_lengkap : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Handphone</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp"
                                value="{{ isset($pelanggan) ? $pelanggan->no_hp : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ isset($pelanggan) ? $pelanggan->alamat : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                                value="{{ isset($pelanggan) ? $pelanggan->foto : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Id User</label>
                            <select class="form-control @error('pelanggan')is-invalid @enderror" name="id_users"
                                id="id_users">
                                <option>--</option>
                                {{ $users }}
                                @foreach ($users as $item)
                                    <option value="{{ isset($pelanggan) ? $pelanggan->id_users : $item->id }}">
                                        {{ $item->email }}
                                    </option>
                                    {{-- <option value="{{ $item->id }}">{{ $item->email }}</option> --}}
                                @endforeach
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
