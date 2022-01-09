<?php

namespace App\Http\Controllers;

use App\Models\M_event;
use App\Models\M_fasilitas;
use App\Models\M_kategori;
use App\Models\M_wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $data_wisata = M_wisata::all();
            return view('admin.wisata.wisata_index', [
                'data_wisata' => $data_wisata,
            ]);
        } else {
            return view('auth.login');
        }
    }
    public function add()
    {
        $kategori_wisata = M_kategori::all();
        $fasilitas_wisata = M_fasilitas::all();
        return view('admin.wisata.wisata_add', [
            'kategori_wisata' => $kategori_wisata,
            'fasilitas_wisata' => $fasilitas_wisata,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_wisata' => 'required|string|max:155',
            'harga_tiket' => 'required',
            'alamat' => 'required',
            'kontak_pengelola' => 'required',
            'fasilitas' => 'required',
            'deskripsi' => 'required|string',
            'gmaps' => 'required|string',
            'id_kategori' => 'required|int'
        ]);
        $data_fasilitas = $request->fasilitas;
        $data_fasilitas_array = array();
        foreach ($data_fasilitas as $data) {
            $data_fasilitas_array[] = $data;
        }
        $wisata = M_wisata::create([
            'nama_wisata' => $request->nama_wisata,
            'harga_tiket' => $request->harga_tiket,
            'alamat' => $request->alamat,
            'kontak_pengelola' => $request->kontak_pengelola,
            'fasilitas' => json_encode($data_fasilitas_array),
            'deskripsi' => $request->deskripsi,
            'gmaps' => $request->gmaps,
            'id_kategori' => $request->id_kategori
        ]);
        if ($wisata) {
            return redirect()
                ->route('manajemen-wisata')
                ->with([
                    'success' => 'New wisata has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    public function delete($id)
    {
        $wisata = M_wisata::find($id);
        $wisata->delete();
        if ($wisata) {
            return redirect()
                ->route('manajemen-wisata')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('manajemen-wisata')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
    public function edit($id)
    {
        $wisata = M_wisata::findOrFail($id);
        return view('admin.wisata.wisata_edit', [
            'data_wisata' => $wisata
        ]);
    }
    public function update(Request $request, $id)
    {
        echo $id;
        $this->validate($request, [
            'nama_wisata' => 'required|string|max:155',
        ]);
        $wisata = M_wisata::findOrFail($id);
        $wisata->update([
            'nama_wisata' => $request->nama_wisata,
        ]);
        if ($wisata) {
            return redirect()
                ->route('manajemen-wisata-wisata')
                ->with([
                    'success' => 'New wisata has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
}
