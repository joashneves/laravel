<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index(){
        return Produto::all();
    }

    public function show(string $id)
    {
        return Produto::findOrFail($id);
    }
}
