<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderBy('id','desc')->paginate(10);
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
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
            'Nama_produk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
        ],
        [
            'Nama_produk.required' => 'nama wajib diisi',
            'Harga.required' => 'harga wajib diisi',
            'Stok.required' => 'srok wajib diisi',
        ]
        );
        $produk = [
            'Nama_produk' => $request->Nama_produk,
            'Harga' => $request->Harga,
            'Stok' => $request->Stok,
        ];

        Produk::create($produk);
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Disimpan');
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
        $dt = Produk::find($id);
        return view('produk.edit', compact('dt'));
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
            'Nama_produk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
        ],
        [
            'Nama_produk.required' => 'nama wajib diisi',
            'Harga.required' => 'harga wajib diisi',
            'Stok.required' => 'stok wajib diisi',
        ]
        );
        $produk = [
            'Nama_produk' => $request->Nama_produk,
            'Harga' => $request->Harga,
            'Stok' => $request->Stok,
        ];

        Produk::where('id', $id)->update($produk);
        return redirect()->route('produk.index')->with('success', 'Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findorfail($id);

        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');
    }
}