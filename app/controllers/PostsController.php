<?php

namespace App\Controllers;

class PostsController
{
    public function index()
    {
        echo 'Rota de Posts';
    }
    public function show($id)
    {
        echo '<pre>';
        print_r('Rota de Posts - Método Show: ' . $id);
    }
}
