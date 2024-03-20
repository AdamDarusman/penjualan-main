@extends('layouts.app')

@section('title', 'Form Reservasi')

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
        action="{{ isset($reservasi) ? route('reservasi.tambah.update', $reservasi->id) : route('reservasi.tambah.simpan') }}"
        method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold textColor">
                            {{ isset($reservasi) ? 'Form Edit reservasi' : 'Form Tambah reservasi' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Data Pelanggan</label>
                            {{-- <input type="id" class="form-control" id="id_pelanggan" name="id_pelanggan"
                                value="{{ isset($reservasi) ? $reservasi->id_pelanggan : '' }}"> --}}
                            <select class="form-control" name="id_pelanggan" id="id_pelanggan">
                                {{-- <option value="">PILIH KATEGORI</option>
                                @foreach ($Pelanggan as $item)
                                    <option class="form-control"
                                        value="{{ isset($reservasi) ? $reservasi->id_pelanggan : '' }}">
                                        {{ $item->nama_lengkap }}</option>
                                @endforeach --}}
                                <option value="">PILIH KATEGORI</option>
                                {{ $Pelanggan }}
                                @foreach ($Pelanggan as $item)
                                    <option value="{{ isset($pelanggan) ? $reservasi->id_pelanggan : $item->id }}">
                                        {{ $item->nama_lengkap }}
                                    </option>
                                    {{-- <option value="{{ $item->id }}">{{ $item->email }}</option> --}}
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Data Paket Wisata</label>
                            <select class="form-control" name="id_paket" id="id_paket">
                                {{-- <option value="">PILIH KATEGORI</option>
                                @foreach ($Paket_Wisata as $item)
                                    <option class="form-control" value="{{ $item->id }}">
                                        {{ $item->nama_paket }}</option>
                                @endforeach --}}
                                <option value="">PILIH KATEGORI</option>
                                {{ $Paket_Wisata }}
                                @foreach ($Paket_Wisata as $item)
                                    <option value="{{ isset($paket_wisata) ? $reservasi->id_paket : $item->id }}">
                                        {{ $item->nama_paket }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Reservasi</label>
                            <input type="date" class="form-control" id="tgl_reservasi_wisata" name="tgl_reservasi_wisata"
                                value="{{ isset($reservasi) ? $reservasi->tgl_reservasi_wisata : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="number">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga"
                                value="{{ isset($reservasi) ? $reservasi->harga : '' }}" onchange="calculateTotalBayar()">
                        </div>
                        <div class="form-group">
                            <label for="number">Jumlah Peserta</label>
                            <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta"
                                value="{{ isset($reservasi) ? $reservasi->jumlah_peserta : '' }}"
                                onchange="calculateTotalBayar()">
                        </div>
                        <div class="form-group">
                            <label for="number">Diskon (%)</label>
                            <input type="number" class="form-control" id="diskon" name="diskon"
                                value="{{ isset($reservasi) ? $reservasi->diskon : '' }}" onchange="calculateTotalBayar()">
                        </div>
                        <div class="form-group">
                            <label for="number">Nilai Diskon</label>
                            <input type="text" class="form-control" id="nilai_diskon" name="nilai_diskon"
                                value="{{ isset($reservasi) ? $reservasi->nilai_diskon : '' }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="number">Total Bayar</label>
                            <input type="text" class="form-control" id="total_bayar" name="total_bayar"
                                value="{{ isset($reservasi) ? $reservasi->total_bayar : '' }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="file">File Bukti Transfer</label>
                            <input type="file" class="form-control" id="file_bukti_tf" name="file_bukti_tf"
                                value="{{ isset($reservasi) ? $reservasi->file_bukti_tf : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="status_reservasi_wisata">Status rservasi wisata</label>
                            <select class="form-control" name="status_reservasi_wisata" id="status_reservasi_wisata">
                                <option value="Pesan">Pesan</option>
                                <option value="Dibayar">Dibayar</option>
                                <option value="Selesai">Selesai</option>
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
    <script>
        function calculateTotalBayar() {
            var harga = document.getElementById('harga').value;
            var jumlahPeserta = document.getElementById('jumlah_peserta').value;
            var diskon = document.getElementById('diskon').value;

            var nilaiDiskon = (harga * diskon) / 100;
            var totalBayar = harga - nilaiDiskon;

            var totalBayarPerPeserta = totalBayar / jumlahPeserta;

            document.getElementById('nilai_diskon').value = nilaiDiskon.toFixed(2);
            document.getElementById('total_bayar').value = totalBayar.toFixed(2);


            function previewImage(event) {
                const fileInput = event.target;
                const imagePreview = document.getElementById('image-preview');

                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.innerHTML = `<img src="${e.target.result}" style="max-width: 100%;">`;
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                } else {
                    imagePreview.innerHTML = '';
                }
            }
        }
    </script>

@endsection
