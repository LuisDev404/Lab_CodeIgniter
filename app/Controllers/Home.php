<?php

//Aqui onde criamos o controller para rodar na aplicação.

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function Hello(): string
    {
        return 'Hello';
    }

    public function Teste(): string 
    {
        return 'Pequeno teste para ver se eu entendi como faz uma rota';
    }

    public function usuario($id)
    {
        return 'usuario ' . $id;
    }

    public function perfil($name)
    {
        return 'perfil ' . $name;
    }

    public function soma($n1,$n2)
    {
        return 'O valor é ' . $n1 + $n2;
    }
}
