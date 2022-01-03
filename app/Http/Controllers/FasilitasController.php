<?php

namespace App\Http\Controllers;
use App\Models\M_fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $data_fasilitas = M_fasilitas::all();
        return view('admin.fasilitas.fasilitas_index',[
            'data_fasilitas' => $data_fasilitas 
        ]);
     
    }
    public function add()
    {
        return view('admin.fasilitas.fasilitas_add');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_fasilitas' => 'required|string|max:155',
        ]);

        $fasilitas = M_fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
       
        ]);

        if ($fasilitas) {
            return redirect()
                ->route('manajemen-fasilitas-wisata')
                ->with([
                    'success' => 'New fasilitas has been created successfully'
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
        $fasilitas = M_fasilitas::findOrFail($id);
        $fasilitas->delete();

        if ($fasilitas) {
            return redirect()
                ->route('manajemen-fasilitas-wisata')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('manajemen-fasilitas-wisata')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
        
    }
    public function edit($id)
    {
        $fasilitas = M_fasilitas::findOrFail($id);
        return view('admin.fasilitas.fasilitas_edit',[
            'data_fasilitas' => $fasilitas 
        ]);
    }
    public function update(Request $request, $id)
    {
        echo $id;
        $this->validate($request, [
            'nama_fasilitas' => 'required|string|max:155',
        ]);

        $fasilitas = M_fasilitas::findOrFail($id);

        $fasilitas->update([
            'nama_fasilitas' => $request->nama_fasilitas,
        ]);

        if ($fasilitas) {
            return redirect()
                ->route('manajemen-fasilitas-wisata')
                ->with([
                    'success' => 'New fasilitas has been updated successfully'
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
