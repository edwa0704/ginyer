<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    public function index (Request $request) {
        $productos = Productos::get();
        return view ('productos.index', compact('productos'));
    }

}
