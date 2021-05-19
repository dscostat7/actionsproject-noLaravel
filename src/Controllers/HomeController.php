<?php

namespace Actions\Inc\Controllers;
require 'autoload.php';

class HomeController
{
    public function index()
    {
        return route('home.index');
    }

    public function getProducts(string $product): void 
    {
        if ($product) {
            return view('products.view');
        } else {
            echo "ERRO NO PARÂMETRO PASSADO! PRODUTO INEXISTENTE !!";
        }
    }
}