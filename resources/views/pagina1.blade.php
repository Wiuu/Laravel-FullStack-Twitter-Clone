@extends('welcome')

{{ $curso }}

@foreach($alunos as $id => $aluno)
   <h1>{{$aluno}}</h1>
@endforeach

{!! $codigo_html !!}

{{ $codigo_html }}