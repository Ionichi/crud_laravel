<?php

namespace App\Http\Controllers;

use App\Models\MasterBerita;
use App\Models\MasterKategori;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.dashboard.berita.index", [
            'berita' => MasterBerita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.berita.create', [
            'kategori' => MasterKategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul_berita' => 'required|max:255',
            'slug' => 'required',
            'master_kategori_id' => 'required',
            'isi_berita' => 'required',
            'foto' => 'image|file|max:1024'
        ]);
        
        $validateData['excerpt'] = Str::limit(strip_tags($request->isi_berita), 100);
        
        MasterBerita::create($validateData);
        return redirect('/dashboard/berita')->with('success', 'Berita baru berhasil ditambahkan!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(MasterBerita::class, 'slug', $request->judul_berita);

        return response()->json(['slug' => $slug]);
    }
}
