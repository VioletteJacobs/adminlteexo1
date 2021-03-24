@extends('template.main')
@section('content')
<section class="container">
    <h1 class="text-center text-white my-5">Nous contacter : </h1>
    <form action="/mail/store" method="POST">
        @csrf
        <div class="form-group">
            <label for=""class="text-white">Votre adresse mail: </label>
            <input type="email" class="contact-from-text" name="adresseemail">
        </div>
        <div class="form-group">
            <label for=""class="text-white">qu'avez-vous à me dire?!</label>
            <textarea name="mail" id="" cols="30" rows="10" class="contact-from-text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</section>
    
@endsection