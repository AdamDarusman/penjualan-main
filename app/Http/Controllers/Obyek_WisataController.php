<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Obyek_Wisata;
use Illuminate\Http\Request;

class Obyek_WisataController extends Controller
{
	public function index()
	{
		$obyek_wisata = obyek_wisata::get();

		return view('obyek_wisata/index', ['obyek_wisata' => $obyek_wisata]);
	}

	public function tambah()
	{
		return view('obyek_wisata.form');
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
		obyek_wisata::create([
			'nama_wisata' => $request->nama_wisata,
			'deskripsi_wisata' => $request->deskripsi_wisata,
			'fasilitas' => $request->fasilitas,
			'foto1' => $fotoname1,
			'foto2' => $fotoname2,
			'foto3' => $fotoname3,
			'foto4' => $fotoname4,
			'foto5' => $fotoname5
		]);

		return redirect()->route('obyek_wisata');
	}

	public function edit($id)
	{

		$obyek_wisata = obyek_wisata::where('id',$id)->first();

		return view('obyek_wisata.form', ['obyek_wisata' => $obyek_wisata]);
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
		obyek_wisata::find($id)->update([
			'nama_wisata' => $request->nama_wisata,
			'deskripsi_wisata' => $request->deskripsi_wisata,
			'fasilitas' => $request->fasilitas,
			'foto1' => $fotoname1,
			'foto2' => $fotoname2,
			'foto3' => $fotoname3,
			'foto4' => $fotoname4,
			'foto5' => $fotoname5
		]);
		return redirect()->route('obyek_wisata');
	}

	public function hapus($id)
	{
		obyek_wisata::where('id', $id)->delete();

		return redirect()->route('obyek_wisata');
	}
}
