<?php

namespace App\Http\Controllers;

use App\Models\mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd($data);
        return view('Mekanik.tampilMekanik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
         return view('Mekanik.tambahMekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new mekanik();
        $data->nm_mekanik = $request->nm_mekanik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $post = $data->save();
        return redirect('Mekanik');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = mekanik::where('id_mekanik', '=', $id)->get();
        return view('mekanik.updatemekanik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $data = mekanik::where('id_mekanik', '=', $id);
        $data->update([
            'nm_mekanik' => $request->nm_mekanik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'transmisi' => $request->transmis, 
        ]);
        return redirect('Mekanik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data= mekanik::where('Mekanik', '=', $id);
        $data->delete();
        return redirect('Mekanik');
    }
}
