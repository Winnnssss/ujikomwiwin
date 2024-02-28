<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index',compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
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
            'Nama_Pelanggan' => 'required',
            'Alamat' => 'required',
            'Nomor_Telpon' => 'required|max:13|min:11',
        ],
        [
            'Nama_Pelanggan.required' => 'nama wajib diisi',
            'Alamat.required' => 'alamat wajib diisi',
            'Nomor_Telpon.required|max:13|min:11' => 'nomor telpon wajib diisi',
        ]
        );
        $pelanggan = [
            'Nama_Pelanggan' => $request->nama_pelanggan,
            'Alamat' => $request->alamat,
            'Nomor_Telpon' => $request->nomor_telpon,
        ];

        Pelanggan::create($pelanggan);
        return redirect()->route('Pelanggan.index')->with('success', 'Data Berhasil Disimpan');
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
        $dt = Pelanggan::find($id);
        return view('Pelanggan.edit', compact('dt'));
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
            'Nama_Pelanggan' => 'required',
            'Alamat' => 'required',
            'Nomor_Telpon' => 'required|max:13|min:11',
        ],
        [
            'Nama_Pelanggan.required' => 'nama wajib diisi',
            'Alamat.required' => 'alamat wajib diisi',
            'Nomor_Telpon.required|max:13|min:11' => 'nomor telpon wajib diisi',
        ]
        );
        $pelanggan = [
            'Nama_Pelanggan' => $request->nama_pelanggan,
            'Alamat' => $request->alamat,
            'Nomor_Telpon' => $request->nomor_telpon,
        ];

        Pelanggan::where('id', $id)->update($pelanggan);
        return redirect()->route('Pelanggan.index')->with('success', 'Data Berhasil di Update');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findorfail($id);

        $pelanggan->delete();

        return redirect()->route('Pelanggan.index')->with('success', 'Data berhasil dihapus');
    }
}