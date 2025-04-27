@extends('layouts.app')

@section('content')
<h1>Tambah Pemesanan</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form action="{{ route('pemesanans.store') }}" method="POST">
    @csrf
    @include('pemesanans.form')
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
