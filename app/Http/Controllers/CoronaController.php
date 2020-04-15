<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\corona;
class CoronaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $req)
    {
        $this->validate($req,[
            'nama' => 'required',
            'umur' => 'required'
        ]);
        $data = $req->keluar + $req->kendaraan+ $req->masker+ $req->berjabat + $req->sabun + $req->uang + $req->jarak + $req->makan + $req->tujuan + $req->pasien + $req->pintu + $req->sabun + $req->tissue + $req->rendam + $req->keramas + $req->sosial + $req->cahaya + $req->olahraga + $req->vitamin + $req->usia + $req->penyakit + $req->setelah;
        if($data <= 7)
        {
            $resiko = "Resiko rendah";
        }elseif($data <= 14)
        {
            $resiko = "Resiko Sedang";
        }elseif($data <= 22)
        {
            $resiko = "Resiko Tinggi";
        }
        corona::insert([
            'nama' => $req->nama,
            'resiko' => $resiko,
            'data' => $data
        ]);
        return redirect('/');
    }
    public function data()
    {
        $data = corona::all();
        return view('data',['data'=>$data]);
    }
}
