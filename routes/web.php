<?php

use App\Livewire\Tasks\TaskShow;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskCreate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks/create', TaskCreate::class);
Route::get('/tasks/index', TaskIndex::class)->name('tasks');
Route::get('/tasks/{task}', TaskShow::class);
