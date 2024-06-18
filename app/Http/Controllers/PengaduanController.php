<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class PengaduanController extends Controller
{
    //
    public function addPengaduan(Request $request){
        //dd($request->all());
        $request->validate([
            'jenis' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|file|mimes:png,jpg'
        ]);

        if (!($request->hasFile('file'))){
            // jika upload gagal
            //Session::flash('gagdal');
            dd('sd');
            return redirect()->back();
        }

        //dd($request->file('file'));
        $currentDateTime = Carbon::now()->format('Ymd His');
        $fileCount = count(Storage::files('public/imgPencemaran')) + 1;

        $fileName = null;
        $fileName= "img_pencemaran_".$currentDateTime.(string)$fileCount.".".$request->file('file')->getClientOriginalExtension();
        // dd($fileName);
        $file = $request->file('file');
        //dd($file);
        
        if (!Storage::disk('public')->exists('imgPencemaran')) {
            Storage::disk('public')->makeDirectory('imgPencemaran');
        }
        $filePath = null;
      
        $filePath = $request->file('file')->storeAs('imgPencemaran', $fileName, 'public');
        // try {
        //     $filePath = $file->storeAs('imgPencemaran', $fileName, 'public');
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }

        // dd($filePath);
            
        // $filePath = Storage::disk('public')->put('imgPencemaran/'.$fileName, file_get_contents($file));
        
        
        // dd($filePath);
        // $fullPath = public_path('imgPencemaran/' . $fileName);

        // $path = 'imgPencemaran/'.$fileName;
        // Storage::disk('public')->put($path,file_get_contents($file));

        $tanggal = Carbon::createFromFormat('m/d/Y', $request->input('tanggal'))->format('Y-m-d');

        \DB::table('pengaduan')->insert([
            'jenis_pencemaran' => $request->input('jenis'),
            'lokasi_pencemaran' => $request->input('lokasi'),
            'tanggal_pencemaran' => $tanggal,
            'deskripsi' => $request->input('deskripsi'),
            'file' => $fileName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back();
    }

    





}
