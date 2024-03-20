@extends('layouts.app')

@section('title', 'Data user')

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
            <h6 class="m-0 font-weight-bold textColor">Data user</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('user.tambah') }}" class="btn colorButton mb-3">Tambah user</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($user as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->level }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('user.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
