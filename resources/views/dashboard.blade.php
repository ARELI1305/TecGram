@extends('layouts.app')
@section('contenido')

<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center">
        <div class="w-full md:w-8/12 lg:w-6/12 px-5">
            <img src="{{asset('img/perfil.jpeg')}}">
        </div>
        <div class="w-full md:w-8/12 lg:w-6/12 px-5">
        <p class=" mt-3 text-gray-800 text-2xl">{{$user->username}}</p> 
        <p class="text-gray-700 text-sm font-bold mt-5">0 <span>Seguidores</span></p>
        <p class="text-gray-700 text-sm font-bold mt-5">0 <span>Siguiendo</span></p>
        <p class="text-gray-700 text-sm font-bold mt-5">0 <span>Publicaciones</span></p>
        </div>
    </div>
</div>
@endsection