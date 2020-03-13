<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\Telefone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PessoasController extends Controller
{
    private $telefone_controller;
    private $pessoa;
    
    public function __construct(TelefonesController $telefones_controller)
    {
        $this->telefone_controller = $telefones_controller;
    }

    public function index()
    {
        $list_pessoas = Pessoa::all();
        return view('pessoas.index', [
            'pessoas' => $list_pessoas
        ]);
    }

    public function novoView()
    {
        return view('pessoas.create');
    }
    
    public function store(Request $request)
    {
        $validacao = $this->validacao($request->all());
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }
        $pessoa = Pessoa::create($request->all());
        if($request->ddd && $request->number)
        {
            $telefone = new Telefone();
            $telefone->ddd = $request->ddd;
            $telefone->telefone = $request->number;
            $telefone->pessoa_id = $pessoa->id;
            $this->telefone_controller->store($telefone);
        }
        
        return redirect("/pessoas")->with("message", "Pessoa criada com sucesso!");
    }
    public function editarView($id)
    {
        return view('pessoas.edit', [
            'pessoa' => $this->getPessoa($id)
        ]);
    }

    public function update(Request $request)
    {
        $validacao = $this->validacao($request->all());
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }
        $pessoa = $this->getPessoa($request->id);
        $pessoa->update($request->all());
        return redirect('/pessoas');
    } 

    protected function excluirView($id)
    {
        return view('pessoas.delete', [
            'pessoa' => $this->getPessoa($id)
        ]);
    }

    protected function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        return redirect('pessoas')->with('success', 'Excluído');
    }

    protected function getPessoa($id)
    {
        
        $this->pessoa = Pessoa::find($id);
        
        return $this->pessoa;
    }
    private function validacao($data)
    {
        
        //Validação de ddd e telefone
        if (array_key_exists('ddd', $data) && array_key_exists('number', $data)){
            if($data['ddd'] || $data['number']){
                $regras['ddd'] = 'required|size:2';
                $regras['number'] = 'required';
            }
            
        }

        //Validando o Nome 
        $regras['nome'] = 'required|min:3';

        //Atribuindo as mensagens para a validação 
        $mensagens = [
            'nome.required' => 'Campo nome é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'ddd.required' => 'O campo ddd é obrigátório.',
            'ddd.size' => 'Campo ddd deve ter pelo menos 2 digitos.',
            'number.required' => 'O campo telefone é obrigatório.',
        ];
        $validator = Validator::make($data, $regras, $mensagens);
        return $validator;
    }

}
