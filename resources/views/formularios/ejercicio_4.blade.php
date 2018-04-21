@extends('common.site_master')
@section('title', 'Ejercicio 4')
@section('content')
    <h1>Ejercicio 4</h1>
    <form method="POST" action="/ejercicio_4/consultar">
        {{ csrf_field() }}
        <label for="recinto">Recinto:</label>
        <select name="recinto">
            <option value="1">Turrialba</option>
            <option value="2">Paraíso</option>
        </select>
        <label for="promedio">Promedio:</label>
        <input name="promedio" type="number"></input><br>
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select><br>
        <input type="submit" value="Consultar"></input>
    </form>
    <form name="resultado">
        Resultado:<input name="txt_resultado" value="@if (!empty($resultado)){{ $resultado }}@endif">
    </form>
@endsection