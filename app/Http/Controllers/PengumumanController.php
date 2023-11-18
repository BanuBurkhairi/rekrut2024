<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Imports\PengumumanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->filled('search')){
            $pengumuman = Pengumuman::search($request->search)->get();
        }else{
            $pengumuman = Pengumuman::get();
        }

        return view('pengumuman.index', compact('pengumuman'));
    }

    public function admin()
    {
        $adpeng = Pengumuman::get();
        return view('pengumuman.admin', compact('adpeng'));
    }

    public function import()
    {
        Excel::import(new PengumumanImport, request()->file('file'));
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $hapus = Pengumuman::truncate();
        return back();
    }
}
