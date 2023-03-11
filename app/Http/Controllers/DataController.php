<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$card = DB::table('card')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['card' => $card]);
 
    }
}
