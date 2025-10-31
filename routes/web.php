<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserWelcome;

/*Route::get('/', function () {
    return view('welcome');
});
*/


/*Route::get('/teste', function(){
    return view('teste');
});
*/

//Route::get('/testeview3/{endereco}/{nascimento}', [App\Http\Controllers\testeview3::class, 'index']);
 


Route::get('/', [UserWelcome::class, 'index'])-> name('views.welcome');

Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::get('/users/list',[UserController::class, 'list'])->name('users.index'); //listUser

Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit')->whereNumber('id'); //rota da view

Route::put('/users/edit/{id}', [UserController::class, 'update'])->name('users.update')->whereNumber('id'); //rota do update

Route::delete('/users/{id}', [UserController::class,'destroy'])->whereNumber('id')->name('users.destroy');

Route::get('/users/file', [UserController::class, 'file'])->name('users.file');


//Route::update('/users/edit',[UserController::class,'update'])->name('users.update');
