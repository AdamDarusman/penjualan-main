<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
	public function index()
	{
		$karyawan = karyawan::get();

		return view('karyawan/index', ['karyawan' => $karyawan]);
	}

	public function tambah()
	{
		return view('karyawan.form');
	}

	public function simpan(Request $request)
	{
		karyawan::create([
			'nama_karyawan' => $request->nama_karyawan,
			'alamat' => $request->alamat,
			'no_hp' => $request->no_hp,
			'jabatan' => $request->jabatan

		]);

		return redirect()->route('karyawan');
	}

	public function edit($id)
	{
		
		$karyawan = karyawan::where('id',$id)->first();

		return view('karyawan.form', ['karyawan' => $karyawan]);
	}

	public function update($id, Request $request)
	{
		karyawan::find($id)->update([
			'nama_karyawan' => $request->nama_karyawan,
			'alamat' => $request->alamat,
			'no_hp' => $request->no_hp,
			'jabatan' => $request->jabatan
		]);

		return redirect()->route('karyawan');
	}

	public function hapus($id)
	{
		karyawan::where('id', $id)->delete();

		return redirect()->route('karyawan');
	}
}
