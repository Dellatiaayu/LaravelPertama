@extends('layouts.app')

@section('title', 'Groups')


@section('content')

<style>
  .warna-bg{
    background: #bce5df;
  }
</style>

<a href="/groups/create" class="card-link btn btn-primary">Tambah Group</a>
<p>

  <div class="row row-cols-12">
    <div class="cols ">
      @foreach ($groups as $group)  
      <div class="card mr-2 mt-2 d-inline-flex warna-bg" style="width: 16rem;">
        <div class="card-body">
          <a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a>
          <p class="card-text">{{ $group['description'] }}</p>
          <hr>
            <a href="" class="card-link btn btn-primary">Tambah Anggota Teman</a>
              @foreach ($group->friends as $friend)
                <li>  {{$friend->nama}}</li>
             @endforeach
          <hr>
          <a href="/groups/{{ $group['id']}}/edit" class="card-link  btn btn-warning">Edit Group</a>
          <form action="/groups/{{ $group['id']}}" method="POST">
            @csrf
            @method('DELETE')
          <button class="card-link  btn btn-danger">Delete Group</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection
    