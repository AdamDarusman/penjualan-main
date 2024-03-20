<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use PDF;
// use Barryvdh\DomPDF\PDF;
use App\Models\Pelanggan;
use App\Models\Reservasi;
use App\Models\Paket_Wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReservasiController extends Controller
{
	public function index()
	{
		$reservasi = reservasi::get();

		return view('reservasi/index', ['reservasi' => $reservasi]);
	}

    // public function cetak_pdf()
    // {
    // 	$reservasi = reservasi::all();

    //     // return view('reservasi/reservasi_pdf', ['reservasi' => $reservasi]);
    // 	$pdf = PDF::loadview('reservasi/reservasi_pdf',['reservasi'=>$reservasi]);
    // 	return $pdf->download('laporan-reservasi-pdf');
    // }

    public function cetak_pdf()
    {
        $reservasi = reservasi::all();

        set_time_limit(300); // Mengatur batas waktu eksekusi menjadi 300 detik (5 menit)

        // return view('reservasi.reservasi_pdf', ['reservasi' => $reservasi]);
        $pdf = PDF::setOptions(['enable_php' => true])
                    ->setPaper('A4')
                    ->loadView('reservasi/reservasi_pdf', ['reservasi' => $reservasi]);

        return response($pdf->output())
                    ->header('Content-Type', 'application/pdf')
                    ->header('Content-Disposition', 'inline; filename="laporan-reservasi.pdf"');
    }



	public function tambah()
	{
		$pelanggan = Pelanggan::get();
        $paket_wisata = Paket_Wisata::get();

		return view('reservasi.form', ['Pelanggan' => $pelanggan, 'Paket_Wisata' => $paket_wisata]);


	}

	public function simpan(Request $request)
    {
        $harga = $request->harga;
        $jumlah_peserta = $request->jumlah_peserta;
        $diskon = $request->diskon;

        // Menghitung nilai diskon
        $nilai_diskon = ($harga * $diskon) / 100;

        // Menghitung total bayar setelah diskon
        $total_bayar = $harga - $nilai_diskon;

        $fotoname5 = Carbon::now()->addHour(5)->timestamp . '.' . $request->file_bukti_tf->extension();
        $request->file_bukti_tf->storeAs('image_uploads', $fotoname5);

        reservasi::create([
            'id_pelanggan' => $request->id_pelanggan,
            'id_paket' => $request->id_paket,
            'jumlah_peserta' => $jumlah_peserta,
            'harga' => $harga,
            'diskon' => $diskon,
            'nilai_diskon' => $nilai_diskon,
            'tgl_reservasi_wisata' => $request->tgl_reservasi_wisata,
            'total_bayar' => $total_bayar,
            'file_bukti_tf' => $fotoname5,
            'status_reservasi_wisata' => $request->status_reservasi_wisata,
        ]);

        return redirect()->route('reservasi');
    }


	public function edit($id)
	{

		$reservasi = reservasi::where('id',$id)->first();
        $paket_wisata = Paket_Wisata::where('id', $reservasi->id_paket_wisata)->get();
        $pelanggan = Pelanggan::where('id', $reservasi->id_pelanggan)->get();
		return view('reservasi.form', ['Paket_Wisata' => $paket_wisata, 'Pelanggan' => $pelanggan, 'reservasi' => $reservasi]);
	}

	public function update($id, Request $request)
	{
        $harga = $request->harga;
        $jumlah_peserta = $request->jumlah_peserta;
        $diskon = $request->diskon;

        // Menghitung nilai diskon
        $nilai_diskon = ($harga * $diskon) / 100;

        // Menghitung total bayar setelah diskon
        $total_bayar = $harga - $nilai_diskon;

        $fotoname5 = Carbon::now()->addHour(5)->timestamp . '.' . $request->file_bukti_tf->extension();
        $request->file_bukti_tf->storeAs('image_uploads', $fotoname5);

        reservasi::find([
            'id_pelanggan' => $request->id_pelanggan,
            'id_paket' => $id_paket,
            'jumlah_peserta' => $jumlah_peserta,
            'harga' => $harga,
            'diskon' => $diskon,
            'nilai_diskon' => $nilai_diskon,
            'tgl_reservasi_wisata' => $request->tgl_reservasi_wisata,
            'total_bayar' => $total_bayar,
            'file_bukti_tf' => $fotoname5,
            'status_reservasi_wisata' => $request->status_reservasi_wisata,
        ]);

        return redirect()->route('reservasi');
	}

	public function hapus($id)
	{
		reservasi::where('id', $id)->delete();

		return redirect()->route('reservasi');
	}
}
