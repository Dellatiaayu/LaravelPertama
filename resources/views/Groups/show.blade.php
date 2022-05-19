@extends('layouts.app')

@section('title', 'Detail ')

@section('content')
<div class="card">
    <div class="card body">
        <h3> Nama Group : {{$group['name'] }} </h3>
        <h3> Deskripsi : {{ $group['description'] }} </h3>
        <h3> Jumlah Anggota Group : {{$group['jml_anggota']}}</h3>
        <h3> Jumlah Anggota Yang Pernah Masuk Group  : {{$group['anggota_masuk']}}</h3>

    </div>
</div>
@endsection
    