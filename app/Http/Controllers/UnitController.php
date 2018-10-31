<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUnit;
use App\ModelSeksyen;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelUnit::all();
        return view('unit.unit_index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*tarik data seksyen */

        $seksyen = ModelSeksyen::all();
        //return dd($seksyen);
        return view('unit.unit_create',compact('seksyen'));
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
            'nama_unit'=>'required',
            'id_seksyen'=> 'required',

          ]);

          $data = new ModelUnit([
            'nama_unit' => $request->get('nama_unit'),
            'id_seksyen'=> $request->get('id_seksyen'),

          ]);

          //dd($data);
          $data->save();
          return redirect('unit')->with('success', 'Berjaya Menambahkan Data!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelUnit::find($id);
        $data->delete();

        return redirect('unit')->with('success', 'Data Berjaya Dipadam!');
    }
}
