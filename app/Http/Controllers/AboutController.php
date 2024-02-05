<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Index;
use Illuminate\Auth\Events\Validated;

class AboutController extends Controller
{

    public function index()
    {

        $nama = "Haikal"; 
        $kelas = "XII RPL 1";
        $usia = 17;
        $alamat = "Purcil";
        $nis = 947504940;

        return view('/post/about', compact("nama", "kelas", "usia", "alamat", "nis"));
    }
    
}
