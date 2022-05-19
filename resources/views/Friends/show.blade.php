@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<div class="card">
    <div class="card body">
        <h3> Nama Teman : {{ $friend['nama'] }} </h3>
        <h3> No Telefon Teman : {{ $friend['no_tlp'] }} </h3>
        <h3> Alamat Teman : {{ $friend['alamat'] }} </h3>
        <h3> Group Saat Ini : {{ $friend['group']}}</h3>
        <h3> Pernah Masuk ke Group : {{ $friend['masuk_grup']}}</h3>
    </div>
</div>
@endsection
    