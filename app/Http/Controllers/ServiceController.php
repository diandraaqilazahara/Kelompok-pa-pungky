<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd($data);
        return view('Service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('Service.tambahService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new service();
        $data-> id_kendaraan = $request-> id_kendaraan;
        $data-> keluhan = $request->keluhan;
        $data-> id_mekanik  = $request->id_mekanik;
        $data-> tgl_masuk = $request-> tgl_masuk;
        $data-> tgl_keluar = $request-> tgl_keluar;
        $data-> id_jns_service = $request-> id_jns_kendaraan;
        $post = $data->save();
        return redirect('service');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = service::where('id_service', '=', $id)->get();
        return view('service.updateservice', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $data = service::where('id_service', '=', $id);
        $data->update([
            'id_kendaraan' => $request->id_kendaraan,
            'keluhan' => $request->keluhan,
            'id_mekanik' => $request-> id_mekanik,
            'tgl_masuk' => $request->masuk,
            'tgl_keluar' => $request->tgl_keluar,
            'id_jns_kendaraan' => $request->id_jns_kendaraan, 
        ]);
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=service::where('id_service', '=', $id);
        $data->delete();
        return redirect('service');
    }
}
