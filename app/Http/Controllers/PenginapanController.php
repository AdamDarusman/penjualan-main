<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
	public function index()
	{
		$penginapan = penginapan::get();

		return view('penginapan/index', ['penginapan' => $penginapan]);
	}

	public function tambah()
	{
		return view('penginapan.form');
	}

	public function simpan(Request $request)
	{
		// $file = $request->foto('uploads/image_uploads');
		// $format = $request-> image
		$fotoname1 = Carbon::now()->addhour(1)->timestamp.'.'.$request->foto1->extension();
		$request->foto1->storeAs('image_uploads',$fotoname1);

		$fotoname2 = Carbon::now()->addhour(2)->timestamp.'.'.$request->foto2->extension();
		$request->foto2->storeAs('image_uploads',$fotoname2);

		$fotoname3 = Carbon::now()->addhour(3)->timestamp.'.'.$request->foto3->extension();
		$request->foto3->storeAs('image_uploads',$fotoname3);

		$fotoname4 = Carbon::now()->addhour(4)->timestamp.'.'.$request->foto4->extension();
		$request->foto4->storeAs('image_uploads',$fotoname4);

		$fotoname5 = Carbon::now()->addhour(5)->timestamp.'.'.$request->foto5->extension();
		$request->foto5->storeAs('image_uploads',$fotoname5);
		penginapan::create([
			'nama_penginapan' => $request->nama_penginapan,
			'deskripsi' => $request->deskripsi,
			'foto1' => $fotoname1,
			'foto2' => $fotoname2,
			'foto3' => $fotoname3,
			'foto4' => $fotoname4,
			'foto5' => $fotoname5
		]);

		return redirect()->route('penginapan');
	}

	public function edit($id)
	{
		
		$penginapan = penginapan::where('id',$id)->first();

		return view('penginapan.form', ['penginapan' => $penginapan]);
	}

	public function update($id, Request $request)
	{
		$fotoname1 = Carbon::now()->addhour(1)->timestamp.'.'.$request->foto1->extension();
		$request->foto1->storeAs('image_uploads',$fotoname1);

		$fotoname2 = Carbon::now()->addhour(2)->timestamp.'.'.$request->foto2->extension();
		$request->foto2->storeAs('image_uploads',$fotoname2);

		$fotoname3 = Carbon::now()->addhour(3)->timestamp.'.'.$request->foto3->extension();
		$request->foto3->storeAs('image_uploads',$fotoname3);

		$fotoname4 = Carbon::now()->addhour(4)->timestamp.'.'.$request->foto4->extension();
		$request->foto4->storeAs('image_uploads',$fotoname4);

		$fotoname5 = Carbon::now()->addhour(5)->timestamp.'.'.$request->foto5->extension();
		$request->foto5->storeAs('image_uploads',$fotoname5);
		penginapan::find($id)->update([
			'nama_penginapan' => $request->nama_penginapan,
			'deskripsi' => $request->deskripsi,
			'foto1' => $fotoname1,
			'foto2' => $fotoname2,
			'foto3' => $fotoname3,
			'foto4' => $fotoname4,
			'foto5' => $fotoname5
		]);
		return redirect()->route('penginapan');
	}

	public function hapus($id)
	{
		penginapan::where('id', $id)->delete();

		return redirect()->route('penginapan');
	}
}
