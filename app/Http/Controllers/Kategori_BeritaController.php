<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Berita;
use Illuminate\Http\Request;

class Kategori_BeritaController extends Controller
{
	public function index()
	{
		$kategori_berita = kategori_berita::get();

		return view('kategori_berita/index', ['kategori_berita' => $kategori_berita]);
	}

	public function tambah()
	{
		return view('kategori_berita.form');
	}

	public function simpan(Request $request)
	{
		kategori_berita::create([
			'kategori_berita' => $request->kategori_berita
		]);

		return redirect()->route('kategori_berita');
	}

	public function edit($id)
	{
		
		$kategori_berita = kategori_berita::where('id',$id)->first();

		return view('kategori_berita.form', ['kategori_berita' => $kategori_berita]);
	}

	public function update($id, Request $request)
	{
		kategori_berita::find($id)->update([
			'kategori_berita' => $request->kategori_berita
		]);

		return redirect()->route('kategori_berita');
	}

	public function hapus($id)
	{
		kategori_berita::where('id', $id)->delete();

		return redirect()->route('kategori_berita');
	}
}
