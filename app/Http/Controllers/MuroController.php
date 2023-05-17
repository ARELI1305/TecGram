<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class MuroController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        return view('dashboard',['user'=>$user]);
    }
    public function create()
    {
        return view('publicacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>['required','max:255'],
            'descripcion'=>'required',
            'imagen'=>'required'
        ]);

        Post::create([
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'user_id'=>auth()->user()->id

        ]);
        return redirect()->route('muro.index',auth()->user()->username);
    }
}

