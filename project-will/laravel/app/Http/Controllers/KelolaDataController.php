<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaDataController extends Controller
{
    public function index()
    {
        return view('kelola.data'); // Pastikan ada view kelola.data.blade.php
    }
}
