@extends('layouts.main')
@section('conteudo')

<nav class="navbar navbar-light" style="background-color:lightblue; display:block">
    <h1 class="title" style="text-align:center">ADICIONAR ALUNO</h1>
</nav>
<br>
<div class="container col-md-6">    
    <form method="POST" action="{{route('aluno.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Nome</b></label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Disciplina</b></label>
            <input type="text" name="disciplina" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Data da matrícula<b></label>
            <input type="date" name="data_matricula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Nota<b></label>
            <input name="nota" type="number" step="0.01" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('aluno.index') }}">
            <button type="button" class="btn btn-warning">Voltar</button>
        </a>
    </form>
    
</div>
@endsection