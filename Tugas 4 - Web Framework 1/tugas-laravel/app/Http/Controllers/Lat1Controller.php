<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    // Fungsi untuk /lat1
    public function index()
    {
        $data["nama"] = "Muhammad Deka Maulana";
        $data["asal"] = "Purbalingga";
        return view('v_latihan1', $data);
    }

    // Fungsi untuk /lat1/m2
    public function method2()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['daf_mhs'] = array(
            array("nama" => "Muhammad", "asal" => "Purbalingga"),
            array("nama" => "Deka", "asal" => "Purwokerto"),
            array("nama" => "Maulana", "asal" => "Jakarta"),
        );
        return view('v_latihan2', $data);
    }
}
