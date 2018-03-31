<?php

namespace Project\Controller;

class Controller
{
    public function index()
    {
        require './app/views/index.php';
    }

    public function calcular()
    {
        require './app/views/calcular.php';
    }

    public function erro404()
    {
        require './app/views/erro404.php';
    }

    public function resetar()
    {
        $_SESSION['historico'] = array();
        require './app/views/index.php';
    }
}
