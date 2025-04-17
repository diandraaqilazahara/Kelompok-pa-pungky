<?php

namespace App\Http\Controllers;

use App\Models\detail_service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class detail_ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = detail_service::get();
        //dd ($data);
        return view('detailservice.tampildetailservice', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('detailservice.tambahdetailservice', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new detail_service();
        $data-> id_service = $request-> id_service;
        $data->sparepart = $request->sparepart;
        $data->harga = $request->harga;
        $post = $data->save();
        return redirect('detail_service');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = detail_service::where('id_detail_service', '=', $id)->get();
        return view('detailservice.updatedetailservice', compact('data', 'id'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $data = detail_service::where('id_detail_service', '=', $id);
        $data->update([
            'sparepart'=> $request->sparepart,
            'harga'=> $request->harga,
        ]);
        return redirect ('detail_service');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data= detail_service::where('id_detail_service', '=', $id);
        $data->delete();
        return redirect('detail_service');
        
    }
}
