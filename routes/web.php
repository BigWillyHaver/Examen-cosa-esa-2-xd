<?php

use App\Http\Livewire\Libros\LibrosCreate;
use App\Http\Livewire\Libros\LibrosDelete;
use App\Http\Livewire\Libros\LibrosIndex;
use App\Models\libro;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', LibrosIndex::class)->name('libros.index');
Route::get('/libros/create', LibrosCreate::class)->name('libros.create');
Route::get('/libros/{libro}/delete', LibrosDelete::class)->name('libros.delete');
