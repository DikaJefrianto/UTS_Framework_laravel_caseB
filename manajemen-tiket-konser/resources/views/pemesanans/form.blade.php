<div class="mb-3">
    <label>Nama Pemesan</label>
    <input type="text" name="nama_pemesan" class="form-control" value="{{ old('nama_pemesan', $pemesanan->nama_pemesan ?? '') }}">
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $pemesanan->email ?? '') }}">
</div>
<div class="mb-3">
    <label>Nama Konser</label>
    <input type="text" name="nama_konser" class="form-control" value="{{ old('nama_konser', $pemesanan->nama_konser ?? '') }}">
</div>
<div class="mb-3">
    <label>Tanggal Konser</label>
    <input type="date" name="tanggal_konser" class="form-control" value="{{ old('tanggal_konser', $pemesanan->tanggal_konser ?? '') }}">
</div>
<div class="mb-3">
    <label>Jumlah Tiket</label>
    <input type="number" name="jumlah_tiket" class="form-control" value="{{ old('jumlah_tiket', $pemesanan->jumlah_tiket ?? 1) }}">
</div>
<div class="mb-3">
    <label>Kategori Tiket</label>
    <select name="kategori_tiket" class="form-control">
        <option value="">Pilih Kategori</option>
        @foreach(['VIP', 'Reguler', 'Festival'] as $kategori)
            <option value="{{ $kategori }}" {{ old('kategori_tiket', $pemesanan->kategori_tiket ?? '') == $kategori ? 'selected' : '' }}>{{ $kategori }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label>Status Pemesanan</label>
    <select name="status_pemesanan" class="form-control">
        <option value="">Pilih Status</option>
        @foreach(['terkonfirmasi', 'pending', 'dibatalkan'] as $status)
            <option value="{{ $status }}" {{ old('status_pemesanan', $pemesanan->status_pemesanan ?? '') == $status ? 'selected' : '' }}>{{ $status }}</option>
        @endforeach
    </select>
</div>
