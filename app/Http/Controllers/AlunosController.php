<?php
 
namespace App\Http\Controllers;
 
use App\Aluno;
use Illuminate\Http\Request;
 
class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
 
        return view('alunos.index',compact('alunos'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //dd('1');
         return view('alunos.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
 
        $aluno->nome = request('nome');
        $aluno->disciplina = request('disciplina');
        $aluno->data_matricula = request('data_matricula');
        $aluno->nota = request('nota');
 
        $aluno->save();
 
        return redirect('/alunos');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show',compact('aluno')); 
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alunos = Aluno::findOrFail($id);
         return view('alunos.edit',compact('alunos')); 
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //dd('grttt');
       
        $aluno = Aluno::findOrFail($id);
 
        $aluno->nome = request('nome');
        $aluno->disciplina = request('disciplina');
        $aluno->data_matricula = request('data_matricula');
        $aluno->nota = request('nota');
 
        $aluno->save();
 
        return redirect('/alunos');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd('dele');
       Aluno::findOrFail($id)->delete();
       return redirect('/alunos');
    }
}