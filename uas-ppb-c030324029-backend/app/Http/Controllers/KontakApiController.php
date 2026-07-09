<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;

class KontakApiController extends Controller
{
    /**
     * Validasi token JWT dari header Authorization.
     * Mengembalikan response error jika tidak valid, atau null jika valid.
     */
    private function checkToken(Request $request)
    {
        $authHeader = $request->header('Authorization');

        if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
            return response()->json(['error' => 'Token tidak ditemukan'], 401);
        }

        $token = substr($authHeader, 7);

        try {
            JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token tidak valid atau kadaluarsa'], 401);
        }

        return null;
    }

    /**
     * Menampilkan daftar semua kontak (untuk aplikasi mobile).
     */
    public function index(Request $request)
    {
        if ($error = $this->checkToken($request)) {
            return $error;
        }

        $kontaks = Kontak::latest()->get();

        return response()->json([
            'total' => $kontaks->count(),
            'data' => $kontaks,
        ]);
    }

    /**
     * Menampilkan detail satu kontak.
     */
    public function show(Request $request, Kontak $kontak)
    {
        if ($error = $this->checkToken($request)) {
            return $error;
        }

        return response()->json(['data' => $kontak]);
    }

    /**
     * Memperbarui data kontak (dari aplikasi mobile).
     */
    public function update(Request $request, Kontak $kontak)
    {
        if ($error = $this->checkToken($request)) {
            return $error;
        }

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

        return response()->json([
            'message' => 'Data berhasil diperbarui',
            'data' => $kontak,
        ]);
    }

    /**
     * Menghapus data kontak (dari aplikasi mobile).
     */
    public function destroy(Request $request, Kontak $kontak)
    {
        if ($error = $this->checkToken($request)) {
            return $error;
        }

        $kontak->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
