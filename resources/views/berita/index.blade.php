@extends('layouts.app')

@section('title', 'Data Berita')

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
            <h6 class="m-0 font-weight-bold textColor">Data Berita</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('berita.tambah') }}" class="btn colorButton mb-3">Tambah Berita</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Berita</th>
                            <th>Kategori Berita</th>
                            <th>Tanggal Post</th>
                            <th>foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($berita as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->berita }}</td>
                                <td>{{ $row->kategori_berita->kategori_berita }}</td>
                                <td>{{ $row->tgl_post }}</td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->foto }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>
                                    <a href="{{ route('berita.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('berita.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
