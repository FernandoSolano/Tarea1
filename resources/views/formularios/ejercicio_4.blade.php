@extends('common.site_master')
@section('title', 'Ejercicio 4')
@section('content')
    <h1>Ejercicio 4</h1>
    <form>
        <label for="recinto">Recinto:</label>
        <select name="recinto">
            <option value="Turrialba">Turrialba</option>
            <option value="Paraiso">Paraíso</option>
        </select>
        <label for="promedio">Promedio:</label>
        <input name="promedio" type="number"></input><br>
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <input type="submit" value="Consultar"></input>
    </form>
@endsection