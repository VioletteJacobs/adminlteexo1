@extends('template.main')
@section('content')
<section class="container">
    <h1 class="text-center text-white my-5">Nous contacter : </h1>
    <form action="/mail/store" method="POST">
        @csrf
        <div class=container>
            <div class="form-group">
                <label for="" class="text-warning">Sujet du Mail: </label>
                <select name="subject_mails_id" id="">
                    @foreach ($subjects as $subject)
                    <option name="subject_mails_id" value="{{$subject->id}}">{{$subject->subject}}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="form-group">
                <label for=""class="text-white">Votre adresse mail: </label>
                <input type="email" class="contact-from-text" name="email">
            </div>
    
            <div class="form-group">
                <label for=""class="text-white">Que souhaitez-vous dire?! </label>
                <textarea name="messageClient" id="" cols="30" rows="10" class="contact-from-text"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</section>
    
@endsection