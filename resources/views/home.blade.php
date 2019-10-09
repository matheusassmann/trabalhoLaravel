@extends('layouts.main')
@section('conteudo')

<nav class="navbar navbar-light" style="background-color:lightblue; display:block">
    <h1 class="title">LISTA DE ALUNOS</h1>  
</nav>

<nav class="nav-button" style="background-color:lightblue; display:block">
<a href="{{ route('aluno.create') }}">
    <button type="submit" class="btn btn-success">ADICIONAR ALUNO</button>
</a>
<br>
</nav>
<table class="table table-hover">
  <thead class="thead-dark" style="text-align:center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Data Matrícula</th>
      <th scope="col">Nota</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="tbody-dark" style="text-align:center">
      @foreach ($alunos as $al)
      <tr>
        <td>{{ $al->id }}</td>
        <td>{{ $al->nome }}</td>
        <td>{{ $al->disciplina }}</td>
        <td>{{ $al->data_matricula }}</td>
        <td>{{ $al->nota }}</td>
      <td><a href=" {{ route('aluno.edit', $al->id) }}"><button type="button" class="btn btn-outline-warning">Editar</button></a></td>
      <form action="{{route('aluno.destroy', $al->id)}}" method="post">
        {!! method_field('delete') !!}
        {{ csrf_field() }}
      <td><button type="submit" class="btn btn-outline-danger">Remover</button></td>
      </form>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection