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
}
