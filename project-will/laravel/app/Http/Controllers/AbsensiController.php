<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function pramuka()
    {
        return view('absensi.pramuka'); // Pastikan ada view absensi.pramuka.blade.php
    }

    public function pmr()
    {
        return view('absensi.pmr'); // Pastikan ada view absensi.pmr.blade.php
    }

    public function voli()
    {
        return view('absensi.voli'); // Pastikan ada view absensi.voli.blade.php
    }
}
