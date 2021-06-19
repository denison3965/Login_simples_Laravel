<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        echo "<h4>Lista de produtos</h4>";
        echo "<ul>";
            echo '<li> Computador </li>';
            echo '<li> Celular </li>';
            echo '<li> Carregador de Celular</li>';
            echo '<li> Fone de Ouvido</li>';
            echo '<li> Video Game</li>';
        echo "</ul>";
    }
}
