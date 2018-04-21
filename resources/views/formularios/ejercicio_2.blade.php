@extends('common.site_master')
@section('title', 'Ejercicio 2')
@section('content')
    <h1>Ejercicio 2</h1>
    <form method="POST" action="/ejercicio_2/consultar">
        {{ csrf_field() }}
        <label for="estilo">Estilo:</label>
        <select name="estilo">
            <option value="1">Divergente</option>
            <option value="2">Convergente</option>
            <option value="3">Asimilador</option>
            <option value="4">Acomodador</option>
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