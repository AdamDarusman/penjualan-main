<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Berita;
use App\Models\Kategori_Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
	public function index()
	{
		$berita = berita::all();

		return view('berita/index', ['berita' => $berita]);
	}

	public function tambah()
	{
        $kategoriBerita = Kategori_Berita::all();

		return view('berita.form', ['kategoriBerita' => $kategoriBerita]);
	}

	public function simpan(Request $request)
	{
		// $file = $request->foto('uploads/image_uploads');
		// $format = $request-> image
		$fotoname = Carbon::now()->timestamp.'.'.$request->foto->extension();
		$request->foto->storeAs('image_uploads',$fotoname);
		berita::create([
			'judul' => $request->judul,
			'berita' => $request->berita,
			'tgl_post' => $request->tgl_post,
			'id_kategori_berita' => $request->id_kategori_berita,
			'foto' => $fotoname

		]);

		return redirect()->route('berita');
	}

	public function edit($id)
	{

		$berita = berita::where('id',$id)->first();

		return view('berita.form', ['berita' => $berita]);
	}

	public function update($id, Request $request)
	{
		$fotoname = Carbon::now()->timestamp.'.'.$request->foto->extension();
		$request->foto->storeAs('image_uploads',$fotoname);
		berita::find($id)->update([
			'judul' => $request->judul,
			'berita' => $request->berita,
			'tgl_post' => $request->tgl_post,
			'id_kategori_berita' => $request->id_kategori_berita,
			'foto' => $fotoname
		]);
		return redirect()->route('berita');
	}

	public function hapus($id)
	{
		berita::where('id', $id)->delete();

		return redirect()->route('berita');
	}
}
