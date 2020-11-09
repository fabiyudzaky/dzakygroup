<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreepikLisence;

class FreepikLisenceController extends Controller
{
    //
    public function index(){
        
        $freepik_lisence    = FreepikLisence::all();
        // $i                  = 0;
        return view('freepik_lisence.index', compact('freepik_lisence'));
    }

    public function create(){
        
        return view('freepik_lisence.create');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'nama_freepik_lisence'      => 'required|max:255',
            'gambar_freepik_lisence'    => 'required',
            'pdf_freepik_lisence'       => 'required',
            'attribute_freepik_lisence' => 'required',
        ]);
        
        $freepik_lisence                            = new FreepikLisence;
        
        $freepik_lisence->nama_freepik_lisence      = $request->input('nama_freepik_lisence');
        $freepik_lisence->gambar_freepik_lisence    = $request->input('gambar_freepik_lisence');
        $freepik_lisence->pdf_freepik_lisence       = $request->input('pdf_freepik_lisence');
        $freepik_lisence->attribute_freepik_lisence = $request->input('attribute_freepik_lisence');
        
        $freepik_lisence->save();

        return redirect('freepik_lisence');
    }
}
