<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaan = Qna::get()->where('status',1);
        return view('qna.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qna.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required',
            'pertanyaan' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['tanya'] = $request->pertanyaan;

        Qna::create($data);

        return redirect('/qna')->with('success', 'Pertanyaan anda sudah terekam, Pertanyaan akan ditampilkan jika sudah dijawab. Mohon Menunggu');
    }

    public function admin() 
    {
        $damin = Qna::get();
        return view('qna.admin', compact('damin'));
    }

    public function show(Qna $qna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jawab = Qna::findOrFail($id);
        return view ('qna.edit', ['jawab' => $jawab]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'jawab' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $datas['jawab'] = $request->jawab;
        $datas['status'] = $request->status;

        Qna::findOrFail($id)->update($datas);

        return redirect('/admin/qna');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Qna $qna)
    {
        //
    }
}
