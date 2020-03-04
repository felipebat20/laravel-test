<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelefonesController extends Controller
{
    public function store(Telefone $telefone){
        var_dump($telefone);
    }
}
