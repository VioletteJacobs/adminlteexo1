@extends('template.main')
@section('content')

<div class="container">
    <div class="card bg-dark text-white m-5">
        <div class="card-header">
          Titre : {{$show ->title}}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{$show ->content}}</p>
            <a href="/">Retour à la welcome</a>
          </blockquote>
        </div>
      </div>
</div>
@endsection
