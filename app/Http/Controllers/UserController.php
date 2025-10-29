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
        $user = User::all();
        return view('users.index', compact('user'));
    }

    public function destroy($id){
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->route('users.index')->with('sucess', 'Usuário deletado com sucesso!'); 
    }

    public function edit($id){
  
        $user = User::findOrfail($id);
        
        return view ('users.edit', compact('user'));
    }

    public function update (Request $request, $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email, '.$id,
        ]);

        $user = User::findOrfail($id);
        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> save();
        return redirect()-> route ('users.index') -> with ('sucess', 'Usuário atualizado com sucesso!');
    }

    public function file(){
        $user = User::all();
        return view('users.file', compact('user'));
    }




  

 
}
