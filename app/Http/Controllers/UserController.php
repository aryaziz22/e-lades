<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
 
    public function index() {
        $nama = "Arvita Agus Kurniasari";
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];

        return view('home', compact('nama', 'pelajaran'));
    }
}

