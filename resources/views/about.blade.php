@extends('app')

@section('content')
        <p>Bonjour &hearts; les amis</p>
        <a href="/">Page d'accueil</a>
        <p>It's currently {{ date('H:i A') }}.</p>
@endsection
