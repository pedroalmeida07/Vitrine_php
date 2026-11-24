<?php

namespace App\Controllers;
use App\Models\CarroModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CarroControler extends BaseController
{
    protected CarroModel $carro;

    public function __construct(){
        $this->carro = new CarroModel();
    }

    public function index()
    {
        $data['listaDeCarros'] = $this->carro->findAll();

        return view('vitrine', $data);
    }
}
