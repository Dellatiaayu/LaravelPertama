@extends('layouts.app')

@section('title', 'Friends')


@section('content')

<style>
  .warna-bg{
    background: #bce5df;
  }
</style>
<a href="/friends/create" class="card-link  btn btn-primary">Tambah Teman</a>
<p>
    <div class="row">
      <div class="col-sm-12">
        @foreach ($friends as $friend)
        <div class="card mr-2 mt-2 d-inline-block warna-bg" style="width: 16rem;">
          <div class="card-body">
            <a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a>
            <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
            <p class="card-text">{{ $friend['alamat'] }}</p>
            <a href="/friends/{{ $friend['id']}}/edit" class="card-link btn btn-warning">Edit Teman</a>
            <form action="/friends/{{ $friend['id']}}" method="POST">
              @csrf
              @method('DELETE')
            <button class="card-link btn btn-danger">Delete Teman</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>

@endsection
    