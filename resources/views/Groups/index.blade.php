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
            <a href="/groups/addmember/{{ $group['id'] }}" class="card-link btn btn-primary">Tambah Anggota Teman</a>

            <ol class="list-group list-group-numbered">
              @foreach ($group->friends as $friend)

                <li class="list-group-item d-flex justify-content-between align-items-start">
                  {{$friend->nama}}
                  <form action="/groups/deleteaddmember/{{ $friend->id}}" method="POST">
                    @csrf
                    @method('PUT')
                  <button type="submit" class="card-link  btn btn-danger">X</button>
                  </form>
                </li>
            
              @endforeach
            </ol>

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
    