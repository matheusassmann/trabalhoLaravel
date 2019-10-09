@extends('layouts.main')
@section('conteudo')

<nav class="navbar navbar-light" style="background-color:lightblue; display:block">
    <h1 class="title" style="text-align:center">EDITAR ALUNO</h1>  
</nav>
<br>
<div class="container col-md-6">

        <form method="post" action="{{route('aluno.update', $aluno->id)}}">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Nome</b></label>
                    <input name="nome" type="text" value="{{$aluno->nome}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Disciplina</b></label>
                    <input name="disciplina" type="text" value="{{$aluno->disciplina}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Data da matrícula</b></label>
                    <input name="data_matricula" type="date" value="{{$aluno->data_matricula}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Nota</b></label>
                    <input name="nota" type="number" step="0.01" value="{{$aluno->nota}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('aluno.index') }}">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            </form>

</div>

@endsection