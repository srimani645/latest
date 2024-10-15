<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

Route::get('/create', [crudcontroller::class, 'create']); 
Route::post('/create', [crudcontroller::class, 'pcreate']); 
Route::get('/read', [crudcontroller::class, 'read']); 
Route::get('/update/{id}', [crudcontroller::class, 'update']); 
Route::get('/delete/{id}', [crudcontroller::class, 'delete']); 
Route::post('/updatesave/{id}', [crudcontroller::class, 'updatesave']); 
