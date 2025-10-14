<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //mostra o formulario de cadastro
    public function create(){
        return view ('users.create');
    }
    



    //salva o usuário no banco
    public function store (Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:7|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> \Illuminate\Support\Facades\Hash::make($request->password),
        ]);

        return redirect() -> back() -> with ('sucess', 'Usuário cadastrado com sucesso!');
    }
    
    public function list(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function destroy($id){
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->route('users.index')->with('sucess', 'Usuário deletado com sucesso!'); 
    }

  

 
}
