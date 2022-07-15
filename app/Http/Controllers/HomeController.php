<?php
namespace App\Http\Controllers;
use App\Models\M_event;
use App\Models\M_kategori;
use App\Models\M_wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data_kategori = M_kategori::all();
        $data_wisata = M_wisata::all();
        return view('home', [
            'data_kategori' => $data_kategori,
            'data_wisata' => $data_wisata,
        ]); 
    }
    public function kategori(Request $request)
    {
        $keyword = $request->id;
        $data_kategori = M_kategori::all();
        $data_kategori_id = M_kategori::find($keyword);
        $wisata = M_wisata::where('id_kategori', $keyword)->paginate(15);
        return view('kategori', [
            'data_kategori' => $data_kategori,
            'data_kategori_id' => $data_kategori_id,
            'wisata' => $wisata,
        ]);
    }
    public function event()
    {
        $data_kategori = M_kategori::all();
        //$data_event = M_event::all();
        $data_event = DB::table('event')
            ->leftJoin('wisata', 'wisata.id', '=', 'event.id_wisata')
            ->get();
        return view('event', [
            'data_kategori' => $data_kategori,
            'data_event' => $data_event,
        ]);
    }
    public function detail($id)
    {
        $data_kategori = M_kategori::all();
        $data_wisata = M_wisata::findOrFail($id);
        return view('wisata_detail',[
            'data_kategori' => $data_kategori,
            'data_wisata' => $data_wisata
        ]);
    }
}
