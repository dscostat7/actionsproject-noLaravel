<?php

spl_autoload_register(function (string $nameClass) {
    $caminhoArquivo = str_replace('Actions\\Inc', 'src', $nameClass);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});