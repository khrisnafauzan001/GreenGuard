<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ViewController extends Controller
{
    //
    public function viewHome(Request $request)
    {
        return view('home');
    }

    public function viewRiwayat()
    {
        $datas = DB::table('pengaduan')->get();
        return view('riwayat')->with('datas', $datas);
    }
}
