<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Menampilkan daftar kontak.
     */
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);

        return view('kontak.index', compact('kontaks'));
    }

    /**
     * Menampilkan form tambah kontak.
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Menyimpan kontak baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email'],
            'website' => ['nullable', 'url'],
            'telp'    => ['required', 'regex:/^[0-9\-]+$/', 'max:20'],
            'pesan'   => ['required', 'string'],
        ], [
            'nama.required'    => 'Nama tidak boleh kosong',
            'email.required'   => 'Email tidak boleh kosong',
            'email.email'      => 'Format email Invalid',
            'website.url'      => 'URL tidak valid',
            'telp.required'    => 'Nomor telp tidak boleh kosong',
            'telp.regex'       => 'Nomor HP hanya boleh angka',
            'pesan.required'   => 'Pesan tidak boleh kosong',
        ]);

        Kontak::create($validated);

        return redirect()->route('kontak.index')->with('status', 'Data berhasil disimpan');
    }

    /**
     * Menampilkan detail kontak.
     */
    public function show(Kontak $kontak)
    {
        return view('kontak.show', compact('kontak'));
    }

    /**
     * Menampilkan form edit kontak.
     */
    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    /**
     * Memperbarui data kontak.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $validated = $request->validate([
            'nama'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email'],
            'website' => ['nullable', 'url'],
            'telp'    => ['required', 'regex:/^[0-9\-]+$/', 'max:20'],
            'pesan'   => ['required', 'string'],
        ], [
            'nama.required'    => 'Nama tidak boleh kosong',
            'email.required'   => 'Email tidak boleh kosong',
            'email.email'      => 'Format email Invalid',
            'website.url'      => 'URL tidak valid',
            'telp.required'    => 'Nomor telp tidak boleh kosong',
            'telp.regex'       => 'Nomor HP hanya boleh angka',
            'pesan.required'   => 'Pesan tidak boleh kosong',
        ]);

        $kontak->update($validated);

        return redirect()->route('kontak.index')->with('status', 'Data berhasil diperbarui');
    }

    /**
     * Menghapus kontak.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()->route('kontak.index')->with('status', 'Data berhasil dihapus');
    }
}
