@extends('layouts.app')

@section('content')
<h1>Edit Pemesanan</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

<form action="{{ route('pemesanans.update', $pemesanan) }}" method="POST">
    @csrf @method('PUT')
    @include('pemesanans.form')
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection

