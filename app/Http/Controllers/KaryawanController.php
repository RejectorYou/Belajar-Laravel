<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KaryawanController extends Controller
{
	public function index(){
		$nama = "Fathurrahman Hardi Ar-Rasyid";
		$posisi = ["Operator","Karyawan","Finishing","Repairing"];
    	return view('karyawan/index', ['nama'=>$nama,'posisi'=>$posisi]);
	}
	public function view($nama){
		$posisi = ["Operator","Karyawan","Finishing","Repairing"];
    	return view('karyawan/index', ['nama'=>$nama,'posisi'=>$posisi]);
	}

	public function add_from(){
		return view('karyawan/add_from');
	}
	public function add_process(Request $request){
		$nama = $request->input('nama');
		$posisi= $request->input('posisi');
		return view('karyawan/index', ['nama'=>$nama,'posisi'=>$posisi]);
	}
}
