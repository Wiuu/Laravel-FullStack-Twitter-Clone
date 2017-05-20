<?php

namespace App\Http\Controllers;


class NovatecController extends Controller
{

    public function index()
    {
        return view('pagina1' , [
            'curso' => 'Laravel',
            'local' => 'Novatec',
            'turma' => '1',
            'alunos' => [
                'joaozinho',
                'zezinho',
            ],
            'codigo_html' => '<h3>Isso veio do banco</h3>'

        ]);
    }
}