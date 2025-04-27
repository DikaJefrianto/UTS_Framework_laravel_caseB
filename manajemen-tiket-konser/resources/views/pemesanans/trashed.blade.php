<!-- resources/views/pemesanans/trashed.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Pemesanan Dihapus</h2>

    @if($pemesanans->isEmpty())
        <p>Belum ada pemesanan yang dihapus.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>Nama Konser</th>
                    <th>Tanggal Konser</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemesanans as $pemesanan)
                    <tr>
                        <td>{{ $pemesanan->id }}</td>
                        <td>{{ $pemesanan->nama_pemesan }}</td>
                        <td>{{ $pemesanan->email }}</td>
                        <td>{{ $pemesanan->nama_konser }}</td>
                        <td>{{ $pemesanan->tanggal_konser }}</td>
                        <td>{{ $pemesanan->status_pemesanan }}</td>
                        <td>
                            <a href="{{ route('pemesanans.restore', $pemesanan->id) }}" class="btn btn-primary btn-sm">Pulihkan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
