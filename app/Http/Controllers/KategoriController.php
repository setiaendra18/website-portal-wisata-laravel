<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\M_kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data_kategori = M_kategori::all();
        return view('admin.kategori.kategori_index',[
            'data_kategori' => $data_kategori 
        ]);
     
    }
    public function add()
    {
        return view('admin.kategori.kategori_add');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|string|max:155',
        ]);

        $kategori = M_kategori::create([
            'nama_kategori' => $request->nama_kategori,
       
        ]);

        if ($kategori) {
            return redirect()
                ->route('manajemen-kategori-wisata')
                ->with([
                    'success' => 'New kategori has been created successfully'
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
        $kategori = M_kategori::findOrFail($id);
        $kategori->delete();

        if ($kategori) {
            return redirect()
                ->route('manajemen-kategori-wisata')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('manajemen-kategori-wisata')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
        
    }
    public function edit($id)
    {
        $kategori = M_kategori::findOrFail($id);
        return view('admin.kategori.kategori_edit',[
            'data_kategori' => $kategori 
        ]);
    }
    public function update(Request $request, $id)
    {
        echo $id;
        $this->validate($request, [
            'nama_kategori' => 'required|string|max:155',
        ]);

        $kategori = M_kategori::findOrFail($id);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        if ($kategori) {
            return redirect()
                ->route('manajemen-kategori-wisata')
                ->with([
                    'success' => 'New kategori has been updated successfully'
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
