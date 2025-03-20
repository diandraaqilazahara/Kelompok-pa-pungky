<?php

namespace App\Http\Controllers;

use App\Models\jns_Kendaraan;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class jns_KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jns_Kendaraan::get();
        //dd($data);
        return  view('JnsKendaraan.tampilJnsKendaraan', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //untuk menampilkan form
       return view('JnsKendaraan.tambahJnsKendaraan');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ///insert ke sql
        $data = new jns_Kendaraan();
        $data->nm_jns_kendaraan = $request->jns_kendaraans;
        $post = $data->save();
        return redirect('jnskendaraan');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jns_Kendaraan::where('id_jns_kendaraan', '=', $id)->get();
        return view('JnsKendaraan.updateJnsKendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=jns_Kendaraan::where('id_jns_kendaraan', '=', $id);
        $data->update([
            'nm_jns_kendaraan' => $request->jns_kendaraans,
        ]);
        return redirect('jnskendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=jns_Kendaraan::where('id_jns_kendaraan', '=', $id);
        $data->delete();
        return redirect('jnskendaraan');
    }
}
