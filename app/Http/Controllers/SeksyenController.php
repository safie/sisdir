<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSeksyen;

class SeksyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelSeksyen::all();
        return view('seksyen.seksyen_index',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seksyen.seksyen_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_seksyen'=>'required',
            'singkatan_seksyen'=> 'required',
            'alamat_seksyen' => 'required'
          ]);

          $data = new ModelSeksyen([
            'nama_seksyen' => $request->get('nama_seksyen'),
            'singkatan_seksyen'=> $request->get('singkatan_seksyen'),
            'alamat_seksyen'=> $request->get('alamat_seksyen')
          ]);

          $data->save();
          return redirect('seksyen')->with('success', 'Berjaya Menambahkan Data!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelSeksyen::find($id);

        return view('seksyen.seksyen_edit',['data' => '$data'])->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_seksyen'=>'required',
            'singkatan_seksyen'=> 'required',
            'alamat_seksyen' => 'required'
          ]);
            
          $data = ModelSeksyen::find($id);
          $data->nama_seksyen = $request->get('nama_seksyen');
          $data->singkatan_seksyen= $request->get('singkatan_seksyen');
          $data->alamat_seksyen= $request->get('alamat_seksyen');     
          $data->save();

          return redirect('seksyen')->with('success', 'Data Berjaya Dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelSeksyen::find($id);
        $data->delete();

        return redirect('seksyen')->with('success', 'Data Berjaya Dipadam!');
    }
}
