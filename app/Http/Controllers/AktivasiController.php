<?php

namespace App\Http\Controllers;

use App\Models\Aktivasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AktivasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aktivasi = Aktivasi::get();
        return view('aktivasi.index', compact('aktivasi'));
    }

    public function admin() 
    {
        $ademin = Aktivasi::get();
        return view('aktivasi.admin', compact('ademin'));
    }

    public function create()
    {
        return view('aktivasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['email'] = $request->email;

        Aktivasi::create($data);

        return redirect('/aktivasi')->with('success', 'Pengajuan Anda sudah masuk, akan segera kami tindak lanjut. Mohon menunggu email dari kita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aktivasi $aktivasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $datas['ket'] = 'Sudah Aktif';

        Aktivasi::findOrFail($id)->update($datas);
        return redirect('/admin/aktivasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Aktivasi::findOrFail($id);
        $hapus->delete();

        return redirect('/admin/aktivasi');
    }
    
}
