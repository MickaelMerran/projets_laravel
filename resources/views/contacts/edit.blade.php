@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b><!-- TODO Afficher le nom du contact -->{{$user->name}}</b></h3>
                <form>
                    <!-- TODO mise en place de la form pour modifier un contact -->
                <form method="POST" action="/edition" class='formulaire'>
                {{csrf_field()}}
                <input type="name" name="name" placeholder="Nouveau nom du contact">
                <input type="email" name="email" placeholder="Nouvel email du contact">  
                <input type="tel" name="tel" placeholder="Nouveau numéro de téléphone du contact"> 
                <input type="submit" value="Envoyer" class="envoi">
                </form>
            </div>
        </div>
    </div>
@endsection
