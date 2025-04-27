@extends('layouts.app') <!-- Layout utama aplikasi -->

@section('content')
    <div class="container">
        <h1>Daftar Pemesanan Tiket Konser</h1>

        <a href="{{ route('pemesanans.create') }}" class="btn btn-primary mb-3">Tambah Pemesanan</a>

        <!-- Tampilkan pesan jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Daftar Pemesanan -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>Nama Konser</th>
                    <th>Tanggal Konser</th>
                    <th>Kategori Tiket</th>
                    <th>Status Pemesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemesanans as $pemesanan)
                    <tr>
                        <td>{{ $pemesanan->id }}</td>
                        <td>{{ $pemesanan->nama_pemesan }}</td>
                        <td>{{ $pemesanan->email }}</td>
                        <td>{{ $pemesanan->nama_konser }}</td>
                        <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_konser)->format('d-m-Y') }}</td>
                        <td>{{ $pemesanan->kategori_tiket }}</td>
                        <td>{{ ucfirst($pemesanan->status_pemesanan) }}</td>
                        <td>
                            <a href="{{ route('pemesanans.edit', $pemesanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pemesanans.destroy', $pemesanan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pemesanan?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-end">
            <!-- Pagination links dengan class Bootstrap -->
            {{ $pemesanans->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
