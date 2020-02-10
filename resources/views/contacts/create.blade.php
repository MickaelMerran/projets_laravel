@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form>
                    <!-- TODO mise en place de la form pour créer un contact -->
                    <form method="POST" action="/blogs" class='formulaire'>
                {{csrf_field()}}
                <input type="name" name="name" placeholder="Nom du contact">
                <input type="email" name="email" placeholder="Email du contact">  
                <input type="tel" name="tel" placeholder="Téléphone du contact"> 
                <input type="submit" value="Envoyer" class="envoi">
                </form>
            </div>
        </div>
    </div>
@endsection
