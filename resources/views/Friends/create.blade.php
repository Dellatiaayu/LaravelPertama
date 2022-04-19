@extends('layouts.app')

@section('title', 'Friends')


@section('content')
<form action="/friends" method="POST">
    @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="name" name="nama" value="{{ old('nama') }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No. Telepon</label>
    <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="{{ old('no_tlp') }}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
    