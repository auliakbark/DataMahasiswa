<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use DataTables;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalPenduduk = Penduduk::count();
        $jumlahLakiLaki = Penduduk::where('jenis_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Penduduk::where('jenis_kelamin', 'Perempuan')->count();

        $dataPenduduk = Penduduk::orderBy('nim', 'desc')->get();
        return view('home', compact('dataPenduduk', 'totalPenduduk', 'jumlahLakiLaki', 'jumlahPerempuan'));
    }


    public function admin()
    {
        $dataPenduduk = Penduduk::all();
        return view('penduduk.tabel', compact('dataPenduduk'));
    }

    public function addPenduduk()
    {
        return view('penduduk.form');
    }

    public function editPenduduk($id)
    {
        $dataPenduduk = Penduduk::findorfail($id);
        return view('penduduk.edit', compact('dataPenduduk'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penduduk::create([

            'nim' => $request->nim,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('/admin');
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
        $dataPenduduk = Penduduk::findorfail($id);
        $dataPenduduk->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataPenduduk = Penduduk::findorfail($id);
        $dataPenduduk->delete();
        return back();
    }
}
