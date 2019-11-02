<?php

namespace App\Http\Controllers;
use App\Pencipta;
use Illuminate\Http\Request;

class PenciptaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pencipta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_berita = Pencipta::all()->pluck('id_berita','id_berita');
        return view('pencipta.create',compact('list_berita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pencipta = \App\Pencipta::create($request->all());
        return redirect('/pencipta');
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
        $pencipta = \App\Pencipta::findOrFail($id);
        $list_berita = Pencipta::all()->pluck('id_berita','id_berita');
        return view('pencipta.edit',compact('pencipta','list_berita'));
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
        $pencipta = \App\Pencipta::findOrFail($id);
        $pencipta->update($request->all());
        return redirect('/pencipta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pencipta = \App\Pencipta::findOrFail($id);
        $pencipta->delete();
        return redirect('/pencipta');
    }
}
