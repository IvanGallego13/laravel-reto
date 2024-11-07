<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greetWithParams(Request $request)
    {
    $name = $request->query('name', 'world');  // Obtiene 'name' de la cadena de consulta, o 'world' si no se proporciona.
    return response()->json(['message' => 'hello world ' . $name]);
    }

}
