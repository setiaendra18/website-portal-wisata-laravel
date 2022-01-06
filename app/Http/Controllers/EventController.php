<?php

namespace App\Http\Controllers;

use App\Models\M_event;
use App\Models\M_wisata;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data_event = M_event::all();
        return view('admin.event.event_index', [
            'data_event' => $data_event
        ]);
    }
    public function add()
    {
        $wisata = M_wisata::all();
        return view('admin.event.event_add', [
            'wisata' => $wisata,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_event' => 'required|string|max:155',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'keterangan' => 'required',
            'id_wisata' => 'required|int'
        ]);
        $event = M_event::create([
            'nama_event' => $request->nama_event,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'keterangan' => $request->keterangan,
            'id_wisata' => $request->id_wisata
        ]);
        if ($event) {
            return redirect()
                ->route('manajemen-event')
                ->with([
                    'success' => 'New event has been created successfully'
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
        $event = M_event::find($id);
        $event->delete();
        if ($event) {
            return redirect()
                ->route('manajemen-event')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('manajemen-event')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
    public function edit($id)
    {   
        $wisata = M_wisata::all();
        $event = M_event::findOrFail($id);
        return view('admin.event.event_edit', [
            'data_event' => $event,
            'wisata' => $wisata,
        ]);
    }
    public function update(Request $request, $id)
    {
        echo $id;
        $this->validate($request, [
            'nama_event' => 'required|string|max:155',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'keterangan' => 'required',
            'id_wisata' => 'required|int'
        ]);
        $event = M_event::findOrFail($id);
        $event->update([
            'nama_event' => $request->nama_event,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'keterangan' => $request->keterangan,
            'id_wisata' => $request->id_wisata
        ]);
        if ($event) {
            return redirect()
                ->route('manajemen-event')
                ->with([
                    'success' => 'New event has been updated successfully'
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
