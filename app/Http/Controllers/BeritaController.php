<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // DAFTAR BERITA
    public function index()
    {
        $mode = 'index';
        $berita = null;

        $beritaUtama = Berita::whereNotNull('tanggal_publikasi')
            ->where('tanggal_publikasi', '<=', now())
            ->latest('tanggal_publikasi')
            ->first();

        $beritas = Berita::latest()->paginate(9);

        return view('berita', compact(
            'mode',
            'berita',
            'beritaUtama',
            'beritas'
        ));
    }

    // FORM TAMBAH BERITA
    public function create()
    {
        $mode = 'create';
        $berita = new Berita();
        $beritas = collect();
        $beritaUtama = null;

        return view('berita', compact(
            'mode',
            'berita',
            'beritaUtama',
            'beritas'
        ));
    }

    // SIMPAN BERITA
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'ringkasan' => 'required|string|max:1000',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sumber_url' => 'nullable|url|max:2048',
            'tanggal_publikasi' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita')
            ->with('success', 'Berita berhasil ditambahkan! 💕');
    }

    // DETAIL BERITA
    public function show(Berita $berita)
    {
        $mode = 'show';
        $beritas = collect();
        $beritaUtama = null;

        return view('berita', compact(
            'mode',
            'berita',
            'beritaUtama',
            'beritas'
        ));
    }

    // FORM EDIT
    public function edit(Berita $berita)
    {
        $mode = 'edit';
        $beritas = collect();
        $beritaUtama = null;

        return view('berita', compact(
            'mode',
            'berita',
            'beritaUtama',
            'beritas'
        ));
    }

    // UPDATE BERITA
    public function update(Request $request, Berita $berita)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'ringkasan' => 'required|string|max:1000',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sumber_url' => 'nullable|url|max:2048',
            'tanggal_publikasi' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $data['gambar'] = $request->file('gambar')
                ->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita')
            ->with('success', 'Berita berhasil diperbarui! 💕');
    }

    // HAPUS BERITA
    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita')
            ->with('success', 'Berita berhasil dihapus! 🗑️');
    }
}
