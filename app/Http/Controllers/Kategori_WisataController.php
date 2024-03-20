<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Wisata;
use Illuminate\Http\Request;

class Kategori_WisataController extends Controller
{
	public function index()
	{
		$kategori_wisata = kategori_wisata::get();

		return view('kategori_wisata/index', ['kategori_wisata' => $kategori_wisata]);
	}

	public function tambah()
	{
		return view('kategori_wisata.form');
	}

	public function simpan(Request $request)
	{
		kategori_wisata::create([
			'kategori_wisata' => $request->kategori_wisata
		]);

		return redirect()->route('kategori_wisata');
	}

	public function edit($id)
	{
		
		$kategori_wisata = kategori_wisata::where('id',$id)->first();

		return view('kategori_wisata.form', ['kategori_wisata' => $kategori_wisata]);
	}

	public function update($id, Request $request)
	{
		kategori_wisata::find($id)->update([
			'kategori_wisata' => $request->kategori_wisata
		]);

		return redirect()->route('kategori_wisata');
	}

	public function hapus($id)
	{
		kategori_wisata::where('id', $id)->delete();

		return redirect()->route('kategori_wisata');
	}
}
