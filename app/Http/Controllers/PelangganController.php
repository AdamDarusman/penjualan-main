<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
	public function index()
	{
		$pelanggan = pelanggan::get();

		return view('Pelanggan/index', [
			'pelanggan' => $pelanggan,
		]);
	}

	public function tambah()
	{
		$users = User::all();

		return view('pelanggan.form', compact('users'));
	}

	public function simpan(Request $request)
	{
		// $file = $request->foto('uploads/image_uploads');
		// $format = $request-> image
		$fotoname = Carbon::now()->timestamp.'.'.$request->foto->extension();
		$request->foto->storeAs('image_uploads',$fotoname);
		pelanggan::create([
			'nama_lengkap' => $request->nama_lengkap,
			'no_hp' => $request->no_hp,
			'alamat' => $request->alamat,
			'foto' => $fotoname,
			'id_users' => $request->id_users
		]);

		return redirect()->route('pelanggan');
	}

	public function edit($id)
	{

		$pelanggan = pelanggan::where('id',$id)->first();
		$users = User::where('id', $pelanggan->id_users)->get();
		// dd($pelanggan->foto);

		return view('pelanggan.form', compact('pelanggan', 'users'));
	}

	public function update($id, Request $request)
	{
		$fotoname = Carbon::now()->timestamp.'.'.$request->foto->extension();
		$request->foto->storeAs('image_uploads',$fotoname);
		pelanggan::find($id)->update([
			'nama_lengkap' => $request->nama_lengkap,
			'no_hp' => $request->no_hp,
			'alamat' => $request->alamat,
			'foto' => $fotoname,
			'id_users' => $request->id_users
		]);
		return redirect()->route('pelanggan');
	}

	public function hapus($id)
	{
		pelanggan::where('id', $id)->delete();

		return redirect()->route('pelanggan');

	}
}
