<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('vitrine');
    }

    public function pagina(): string
    {
        return view('inicio');
    }

    public function goat(): string
    {
        return view('goat');
    }

    public function vercarros(): string
    {
        return view('vitrine');
    }
}
