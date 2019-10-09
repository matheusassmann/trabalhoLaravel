@extends('layout')
 
@section('content')
 
</<!DOCTYPE html>
<html>
<head>
   
</head>
<style>
 
 
</style>
<body>
 <br>
<h1 class="title">Alunos</h1>
 
<form action="/alunos/create">
    <div class="field">
        <div class="control">
           <button type="submit" class="button is-link" >Novo Aluno</button>
      </div>
   </div>
</form>
 
 
@foreach ($alunos as $aluno)
<li> 
    <a href="/alunos/{{ $aluno->id }}">
 
    {{ $aluno->name}}  
 
    </a>
 
</li>
@endforeach
 
 
</body>
</html>
 
 
@endsection