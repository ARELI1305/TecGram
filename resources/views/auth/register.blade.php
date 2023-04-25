@extends('layouts.app')
@section('titulo')
    Registrate en TecGram
@endsection

@section('contenido')
<div class="flex justify-center items-center gap-10">
    <div class="w-4/12">
        <img class="rounded-full" src="{{asset('img/img1.jpg')}}" alt="">
    </div>
    <div class="w-4/12 bg-white p-6 rounder-lg shadow-xl">
        <form action="{{route('cuenta.store')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="name">Nombre</label>
                <input class="border p-1 w-full rounded-lg @error('name') border-red-500 @enderror" type="text" name="name" id="name" value="{{old('name')}}">
            </div>
            @error('name')
              <p class="text-red-600  mb-2"> {{$message}}</p>
            @enderror

            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="username">Nombre de Usuario</label>
                <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" name="username" id="username" value="{{old('username')}}">
            </div>
            @error('username')
            <p class="text-red-600 mb-2"> {{$message}}</p>
          @enderror

            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="email">Correo</label>
                <input class="border p-1 w-full rounded-lg @error('email') border-red-500 @enderror" type="text" name="email" id="email" value="{{old('email')}}">
            </div>
            @error('email')
            <p class="text-red-600 mb-2"> {{$message}}</p>
          @enderror
            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="password">Contraseña</label>
                <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror" type="text" name="password" id="password">
            </div>
            @error('password')
            <p class="text-red-600 mb-2"> {{$message}}</p>
          @enderror

            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="password_confirmation">Repetir Contraseña</label>
                <input class="border p-1 w-full rounded-lg @error('password') border-red-500 @enderror"  type="text" name="password_confirmation" id="password_confirmation">
            </div>

            <input class="cursor-pointer hover:bg-sky-700 uppercase w-full rounded-lg font-bold bg-sky-500 text-white p-2" type="submit" value="Crear Cuenta" name="" id="">
        </form>
    </div>
</div>
@endsection