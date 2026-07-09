<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getData()
    {
        $data = TahunAkademik::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            'tahun_akademik' => 'required|string',
            'semester' => 'required|in:Ganjil,Genap',
        ]);

        TahunAkademik::create($payload);
        return response()->json(['message' => 'Tahun Akademik berhasil dibuat'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = TahunAkademik::findOrFail($id);
        $payload = $request->validate([
            'tahun_akademik' => 'required|string',
            'semester' => 'required|in:Ganjil,Genap',
        ]);

        $data->update($payload);
        return response()->json(['message' => 'Tahun Akademik berhasil diperbarui']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TahunAkademik::where('id', $id)->firstOrFail();
        $data->delete();
        return response()->json(['message' => 'Tahun Akademik berhasil dihapus']);
    }
}
