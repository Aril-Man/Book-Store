<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDistri()
    {
        $admin = Distributor::all();
        return view('admin.distributor.createDistri', ['admin' => $admin]);
    }

    public function createBuku()
    {

        $idbukuold = Buku::max('id_buku');
        $idbukunew = (int) $idbukuold + 1;
        $fkKode = $idbukunew;

        $fkbuku = 'FK00000' . $fkKode;

        return view('admin.buku.createBuku')
        ->with(compact('fkbuku'));
    }

    public function createPasok()
    {
        return view('admin.pasok.createPasok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDistri(Request $request)
    {
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
        ]);

        Distributor::create($request->all());

        return redirect('/admin/distributor/createDistri')->with('alert','Berhasil input data');

        // $distri = new Distributor();
        // $distri->nama_distributor = $request->nama_distributor;
        // $distri->alamat = $request->alamat;
        // $distri->telpon = $request->telpon;
        // $distri->save();

        // Distributor::create([
        //     'nama_distributor' => $request->nama_distributor,
        //     'alamat' => $request->alamat,
        //     'telpon' => $request->telpon
        // ]);

        // return redirect('/admin/createDistri')->with('alert','Berhasil input data');

    }

    public function storeBuku(Request $request)
    {
        $request->validate([
            'id_buku' => 'required',
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'ppn' => 'required',
            'diskon'=> 'required',
        ]);

        Buku::create($request->all());
        return redirect('/admin/buku/semuaBuku')->with('alert','Berhasil input data');
    }

    public function storePasok(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSemuaDataBuku()
    {
        $buku = Buku::all();
        return view('admin.buku.semuaBuku', ['buku' => $buku]);
    }

    public function showBukuSeringTerjual()
    {
        $buku = Buku::all();
        return view('admin.buku.bukuSeringTerjual', ['buku' => $buku]);
    }

    public function showPenulisBuku()
    {
        $buku = Buku::all();
        return view('admin.buku.filterPenulis', ['buku' => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDistri(Distributor $distributor)
    {
        return view('admin.distributor.editDistri', compact('distributor'));
    }

    public function editbuku(Buku $buku)
    {
        return view('admin.buku.editBuku', compact('buku'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateDistri(Request $request, Distributor $distributor)
    {
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
        ]);

        $distributor::where('id_distributor', $distributor->id_distributor)
                        ->update([
                            'nama_distributor' => $request->nama_distributor,
                            'alamat' => $request->alamat,
                            'telpon' => $request->telpon,
                        ]);
        return redirect('/admin/distributor/createDistri')->with('alert','Data berhasil diubah');
    }

    public function updatebuku(Request $request, Buku $buku)
    {
        $request->validate([
            'id_buku' => 'required',
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'ppn' => 'required',
            'diskon' => 'required',
        ]);

        $data =  $buku->where('id_buku', $buku->id_buku)
                ->update([
                    'judul' => $request->judul,
                    'noisbn' => $request->noisbn,
                    'penulis' => $request->penulis,
                    'penerbit' => $request->penerbit,
                    'tahun' => $request->tahun,
                    'stok' => $request->stok,
                    'harga_pokok' => $request->harga_pokok,
                    'harga_jual' => $request->harga_jual,
                    'ppn' => $request->ppn,
                    'diskon' => $request->diskon,
                ]);

            dd($data);
        return redirect('/admin/buku/createBuku')->with('alert','Data berhasih Berubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyDistri(Distributor $distributor)
    {
        Distributor::destroy($distributor->id_distributor);
        return redirect('/admin/distributor/createDistri')->with('alert','Data berhasil terhapus');
    }
    public function destroyBuku(Buku $buku)
    {
        Buku::destroy($buku->id_buku);
        return redirect('/admin/buku/semuaBuku')->with('alert','Data berhasil terhapus');
    }
}
