@extends('layouts.app')

@section('title', 'Data Pelanggan')

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
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold textColor">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('pelanggan.tambah') }}" class="btn colorButton mb-3">Tambah Pelanggan</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Handphone</th>
                            <th>Alamat</th>
                            <th>foto</th>
                            <th>Id User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($pelanggan as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nama_lengkap }}</td>
                                <td>{{ $row->no_hp }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>{{ $row->id_users }}</td>
                                <td>
                                    <a href="{{ route('pelanggan.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('pelanggan.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
