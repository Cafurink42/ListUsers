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

Route::get('/users/list',[UserController::class, 'list'])->name('users.index');

Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.destroy');
