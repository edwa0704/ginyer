<?php

use App\Models\Cliente;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\Producto\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

   /* $cliente = Cliente::create([
        'nombre' => 'Richar',
        'pri_ape' => 'Meza',
        'seg_ape' => 'Soto', 
        'docu_tip' => 'M',
        'docum_num' => '5289658',
        'telefono' => '5484941',
        'direccion' => 'calee',
    ]);
    return $cliente->nombre." ".$cliente->pri_ape;*/
    
    //dd($cliente);

    return view('welcome');

});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');