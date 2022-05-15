@extends('layouts.app')

@section('title', 'Groups')


@section('content')
<form action="/groups/{{ $group['id']}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control" id="name" name="name" 
    value="{{ old('name') ? old('name') : $group['name']}}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="description" id="description" 
    value="{{ old('description') ? old('description') : $group['description']}}">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
    