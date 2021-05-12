@extends('layouts.app')


@section('content')
    <img src="{{asset('/image/télécharger.jfif')}}", alt="La NASA " class="mt-12 h-25">
    <h2 class="mt-5 text-3xl font-semibold text-indigo-600">welcome to Laravel</h2>
    <p class="text-lg text-gray-800">It's currently {{ date('H:i A') }}.</p>
@endsection

