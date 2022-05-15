@extends('layouts.app')

@section('title', 'Groups')


@section('content')
<form action="/groups" method="POST">
    @csrf
  <div class="form-group">
    <label for="name">Nama Group</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
    