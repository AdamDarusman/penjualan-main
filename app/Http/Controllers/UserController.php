<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$user = user::get();

		return view('user/index', ['user' => $user]);
	}

	public function tambah()
	{
		return view('user.form');
	}

	public function simpan(Request $request)
	{
		user::create([
			'email' => $request->email,
			'password' => $request->password,
			'level' => $request->level
		]);

		return redirect()->route('user');
	}

	public function edit($id)
	{
		
		$user = user::where('id',$id)->first();

		return view('user.form', ['user' => $user]);
	}

	public function update($id, Request $request)
	{
		user::find($id)->update([
			'email' => $request->email,
			'password' => $request->password,
			'level' => $request->level
		]);

		return redirect()->route('user');
	}

	public function hapus($id)
	{
		User::where('id', $id)->delete();

		return redirect()->route('user');
	}
}
