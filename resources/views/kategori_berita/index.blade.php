@extends('layouts.app')

@section('title', 'Data Kategori_Berita')

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
            <h6 class="m-0 font-weight-bold textColor">Data Kategori Berita</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('kategori_berita.tambah') }}" class="btn colorButton mb-3">Tambah Kategori Berita</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($kategori_berita as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->kategori_berita }}</td>
                                <td>
                                    <a href="{{ route('kategori_berita.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('kategori_berita.hapus', $row->id) }}"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
