<!-- TODO Etendre le layout "app" -->
@extends('layouts.app')

<!-- TODO Dans la séction "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->
@section('content')
<div class="container">
<ul>
@forelse($users as $user)
    <p>{{$user->name}} a : {{ $user->contacts->count()}} contact</p>
    @empty
    <!-- OU -->
    <p>Il n'y a pas encore d'utilisateur</p>
@endforelse
</ul>
</div>
@endsection