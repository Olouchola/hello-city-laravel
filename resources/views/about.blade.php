@extends('app')

@section('title','About Us')

@section('content')
        <p>Bonjour &hearts; les amis</p>
        <a href="{{route('welcome')}}">Page d'accueil</a>
        <p>It's currently {{ date('H:i A') }}.</p>
@endsection
