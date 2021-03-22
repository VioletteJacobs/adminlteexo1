@extends('template.main')
@section('content')
<div class="container">
    {{-- tables des articles  --}}
    <h1 class="text-center text-white"> Nos articles: </h1>
    <a href="/articles/create">Ajouter un article</a>
    <table class="table text-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
              <th scope="row"></th>
              <td>{{$item->title}}</td>
              <td>{{$item->users->name}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>


</div>
@endsection