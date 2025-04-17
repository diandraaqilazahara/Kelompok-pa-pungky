<?php

namespace App\Http\Controllers;

use App\Models\jns_service;
use Illuminate\Http\Request;

class jns_ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($data);
        return view('JnsService.tampilJnsService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('JnsService.tambahJnsService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new jns_service();
        $data->jns_service = $request->jns_service;
        $data->keterangan = $request->keterangan;
        $post = $data->save();
        return redirect('jns_service');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jns_service::where('id_jns_service', '=', $id)->get();
        return view('JnsService.updateJnsService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=jns_service::where('id_jns_service', '=', $id);
        $data->update([
            'jns_service' => $request->jns_service,
            'keterangan' => $request->Keterangan,
        ]);
        return redirect('jns_service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=jns_service::where('id_jns_service', '=', $id);
        $data->delete();
        return redirect('jns_service');
    }
}
