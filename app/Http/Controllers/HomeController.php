<?php

namespace App\Http\Controllers;

use App\Models\JenisJerawat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $jenisJerawat = JenisJerawat::all();

        $data = [
            'jenisJerawat' => $jenisJerawat
        ];
        return view('test', $data);
    }
}
