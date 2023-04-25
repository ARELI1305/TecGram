@extends('layouts.app')
@section('titulo')
    Iniciar Sesion en TecGram
@endsection

@section('contenido')
<div class="flex justify-center items-center gap-10">
    <div class="w-4/12">
        <img class="rounded-full" src="{{asset('img/img1.jpg')}}" alt="">
    </div>
    <div class="w-4/12 bg-white p-6 rounder-lg shadow-xl">
        <form action="{{route('login.store')}}" method="POST">
            @csrf
           @if(session('mensaje'))
           <p class="text-red-700 my-2">{{session('mensaje')}}</p>
           @endif
            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="username">Nombre de Usuario</label>
                <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" name="username" id="username" value="{{old('name')}}">
            </div>
            @error('username')
            <p class="text-red-600 mb-2"> {{$message}}</p>
          @enderror

            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="password">Contraseña</label>
                <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="text" name="password" id="password">
            </div>
            @error('password')
            <p class="text-red-600 mb-2"> {{$message}}</p>
          @enderror
            <div class="mb-3">
                <input type="checkbox" name="remember" id="remember">
                <label class="text-gray-700" for="remember"> Recuerdame</label>
            </div>
            <input class="cursor-pointer hover:bg-sky-700 uppercase w-full rounded-lg font-bold bg-sky-500 text-white p-2" 
            type="submit" value="Iniciar Sesion" name="" id="">
        </form>
    </div>
</div>
@endsection