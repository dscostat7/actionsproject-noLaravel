<?php

namespace Actions\Inc\Views;

require_once 'autoload.php';

Route::get('/', [HomeController::class, 'index'])->name('home.index');