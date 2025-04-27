<?php
namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::paginate(8); // Ambil data dengan pagination
        return view('pemesanans.index', compact('pemesanans'));
    }

    public function create()
    {
        return view('pemesanans.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'email' => 'required|email|unique:pemesanans,email',
            'nama_konser' => 'required|string|max:255',
            'tanggal_konser' => 'required|date',
            'jumlah_tiket' => 'required|integer|min:1',
            'kategori_tiket' => 'required|in:VIP,Reguler,Festival',
            'status_pemesanan' => 'required|in:terkonfirmasi,pending,dibatalkan',
        ]);

        Pemesanan::create($validated);

        return redirect()->route('pemesanans.index')->with('success', 'Pemesanan berhasil ditambahkan.');
    }

    public function edit(Pemesanan $pemesanan)
    {
        return view('pemesanans.edit', compact('pemesanan'));
    }

    public function update(Request $request, Pemesanan $pemesanan)
    {
        $validated = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'email' => 'required|email|unique:pemesanans,email,' . $pemesanan->id,
            'nama_konser' => 'required|string|max:255',
            'tanggal_konser' => 'required|date',
            'jumlah_tiket' => 'required|integer|min:1',
            'kategori_tiket' => 'required|in:VIP,Reguler,Festival',
            'status_pemesanan' => 'required|in:terkonfirmasi,pending,dibatalkan',
        ]);

        $pemesanan->update($validated);

        return redirect()->route('pemesanans.index')->with('success', 'Pemesanan berhasil diupdate.');
    }

    public function destroy(Pemesanan $pemesanan)
    {
        $pemesanan->delete();
        return redirect()->route('pemesanans.index')->with('success', 'Pemesanan berhasil dihapus.');
    }
    public function trashed()
    {
        $pemesanans = Pemesanan::onlyTrashed()->paginate(8); // Ambil hanya yang dihapus
        return view('pemesanans.trashed', compact('pemesanans'));
    }

    // Memulihkan pemesanan yang dihapus
    public function restore($id)
    {
        $pemesanan = Pemesanan::withTrashed()->findOrFail($id);
        $pemesanan->restore(); // Memulihkan pemesanan

        return redirect()->route('pemesanans.trashed')->with('success', 'Pemesanan berhasil dipulihkan.');
    }

}
