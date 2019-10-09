<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoControllerResource extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        return view('home', compact('alunos'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        
        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->disciplina = $request->disciplina;
        $aluno->data_matricula = $request->data_matricula;
        $aluno->nota = $request->nota;
/*
        $aluno->nome = request('nome');
        $aluno->disciplina = request('disciplina');
        $aluno->data_matricula = request('data_matricula');
        $aluno->nota = request('nota');*/

        $aluno->save();
        return redirect()->route('aluno.index')->with('message', 'Aluno criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $aluno = Aluno::findOrFail($id);
        return view('edit', compact('aluno'));
    }

    public function update(Request $request, $id) {
        $aluno = Aluno::findOrFail($id); 
        $aluno->nome = $request->nome;
        $aluno->disciplina = $request->disciplina;
        $aluno->data_matricula = $request->data_matricula;
        $aluno->nota = $request->nota;
        $aluno->save();
        return redirect()->route('aluno.index')->with('message', 'Aluno alterado com sucesso!');

    }

    public function destroy($id) {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('aluno.index')->with('message', 'Aluno excluído com sucesso!');
    }

}
