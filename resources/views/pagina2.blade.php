@extends('welcome')

{{ $curso }}

@if (count($alunos) > 0)

    @foreach($alunos as $id => $aluno)
        <h1>{{$aluno}}</h1>
    @endforeach

@else

    <h1>alunos vazia</h1>

@endif
{!! $codigo_html !!}