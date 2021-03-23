@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>

<div class="container">
    {{-- tables des articles  --}}
    <h1 class="text-center"> Nos articles: </h1>
    <a href="/articles/create">Ajouter un article</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
              <th scope="row"></th>
              <td>{{$item->title}}</td>
              <td>{{$item->users->name}}</td>
              <td>
                <a href="/article/{{$item}}/edit">Edit</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@stop
