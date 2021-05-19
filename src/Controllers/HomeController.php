<?php

namespace Actions\Inc\Controllers;
require 'autoload.php';

class HomeController
{
    public function index()
    {
        return route('home.index');
    }
}