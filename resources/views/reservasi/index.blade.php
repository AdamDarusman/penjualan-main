@extends('layouts.app')

@section('title', 'Data Reservasi')

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
            <h6 class="m-0 font-weight-bold textColor">Data Reservasi</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('reservasi.tambah') }}" class="btn colorButton mb-3">Tambah reservasi</a>
            {{-- <a href="{{ route('cetakReser') }}" class="btn colorButton mb-3 ml-3" target="_blank">CETAK PDF</a> --}}
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pelanggan</th>
                            <th>Paket</th>
                            <th>Tanggal Reservasi Wisata</th>
                            <th>Harga</th>
                            <th>Jumlah Peserta</th>
                            <th>Diskon</th>
                            <th>Nilai Diskon</th>
                            <th>Total Bayar</th>
                            <th>File Bukti Tf</th>
                            <th>Status Reservasi Wisata</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($reservasi as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->pelanggan->nama_lengkap }}</td>
                                <td>{{ $row->paket_wisata->nama_paket }}</td>
                                <td>{{ $row->tgl_reservasi_wisata }}</td>
                                <td>RP.{{ number_format($row->harga) }}</td>
                                <td>{{ $row->jumlah_peserta }}</td>
                                <td>{{ number_format($row->diskon) }}%</td>
                                <td>{{ number_format($row->nilai_diskon) }}%</td>
                                <td>{{ $row->total_bayar }}</td>
                                <td>
                                    <img src="{{ asset('uploads/image_uploads') }}/{{ $row->file_bukti_tf }}"
                                        style="width: 50px; height: 50px; object-fit: cover">
                                </td>
                                <td>{{ $row->status_reservasi_wisata }}</td>
                                <td>
                                    <a href="{{ route('reservasi.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('reservasi.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
