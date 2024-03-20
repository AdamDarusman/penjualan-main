@extends('layouts.app')

@section('title', 'Data Penginapan')

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
            <h6 class="m-0 font-weight-bold textColor">Data Penginapan</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('penginapan.tambah') }}" class="btn colorButton mb-3">Tambah penginapan</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penginapan</th>
                            <th>Deskripsi</th>
                            <th>foto1</th>
                            <th>foto2</th>
                            <th>foto3</th>
                            <th>foto4</th>
                            <th>foto5</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($penginapan as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nama_penginapan }}</td>
                                <td>{{ $row->deskripsi }}</td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto1 }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto2 }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto3 }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto4 }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto5 }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>
                                    <a href="{{ route('penginapan.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('penginapan.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
