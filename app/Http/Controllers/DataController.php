<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
	public function index()
	{

		$card = DB::table('card')->get();

		return view('index', ['card' => $card]);
	}

	// add data --------------------------------------------------------------------------------------------
	public function add(Request $request)
	{

		$date_now = date("Y-m-d");

		DB::table('card')->insert([
			'name' => $request->name,
			'price' => $request->price,
			'date' => $date_now

		]);

		return redirect('/');
	}

	// edit data --------------------------------------------------------------------------------------------
	public function edit($id)
	{

		$card = DB::table('card')->where('id', $id)->get();

		return view('index', ['card' => $card]);
	}

	
}
