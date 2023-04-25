@extends('layouts.app')
@section('titulo')
Crear nueva publicacion 
@endsection
@section('contenido')
<div class="md:flex md:items-center mx-5">
    <div class="md:w-1/2 px-10">
    <form action="#" id="dropzone" class="dropzone border-dashed border-2 w-full h-72 rounded flex flex-col justify-center items-center bg-transparent"></form>
    </div>
    <div class="md:w-1/2 px-10 bg-white p-6 rounder-lg shadow-xl">
        <form action="" method="POST">
            @csrf
            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="titulo">Titulo</label>
                <input class="border p-1 w-full rounded-lg @error('titulo') border-red-500 @enderror" type="text" name="titulo" id="titulo" value="{{old('titulo')}}">
            </div>
            @error('titulo')
            <p class="text-red-600  mb-2"> {{$message}}</p>
            @enderror

            <div class="mb-5">
                <label class="mb-2 block text-gray-700 font-bold uppercase" for="descripcion">Descripcion</label>
                <textarea class="border p-1 w-full rounded-lg @error('descripcion') border-red-500 @enderror" type="text" name="descripcion" id="descripcion" >{{old('descripcion')}}</textarea>
            </div>
            @error('descripcion')
            <p class="text-red-600  mb-2"> {{$message}}</p>
            @enderror

            <input class="cursor-pointer hover:bg-sky-700 uppercase w-full rounded-lg font-bold bg-sky-500 text-white p-2" type="submit" value="Publicar" name="" id="">
        </form>
    </div>
</div>
@endsection