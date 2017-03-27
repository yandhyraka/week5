<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
	public function index(Request $request)
    {
		$nama_variable = $request->input('nama');
		$bebas_aja = $request->input('email');
		$gender = $request->input('gender');
		$weapon = $request->input('weapon');

		return view('forms')->with('nama', $nama_variable)->with('email', $bebas_aja)->with('gender', $gender)->with('weapon', $weapon);
    }
}
