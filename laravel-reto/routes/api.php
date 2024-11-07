<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message' => 'hello world']);
});

Route::get('/hello/{name}', function ($name) {
    return response()->json(['message' => 'hello world ' . $name]);
});

// Nueva ruta con parámetros de query
Route::get('/params/hello', function (\Illuminate\Http\Request $request) {
    $name = $request->query('name', 'world');
    return response()->json(['message' => 'hello world ' . $name]);
});

