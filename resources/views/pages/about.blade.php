@extends('layouts.app',['title'=>'About Us'])


@section('content')
         <img src="{{asset('/image/OIP.jfif')}}", alt="Mon Pays" class="mt-12">
        <h2 class="mt-3 text-2xl text-gray-700">
        	Bonjour <span class="text-pink-500">&hearts;</span> les amis
        </h2>
        
        <p>
        	<a href="{{route('welcome')}}" class="text-indigo-500 hover:text-indigo-600 underline">Page d'accueil</a>
        </p>
@endsection
