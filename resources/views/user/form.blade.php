@extends('layouts.app')

@section('title', 'Form user')

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
    <form action="{{ isset($user) ? route('user.tambah.update', $user->id) : route('user.tambah.simpan') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($user) ? 'Form Edit user' : 'Form Tambah user' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ isset($user) ? $user->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                                value="{{ isset($user) ? $user->password : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" name="level" id="level">
                                <option value="Admin">Admin</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Pemilik">Pemilik</option>
                                <option value="Pelanggan">Pelanggan</option>
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
