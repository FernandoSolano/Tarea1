@extends('common.site_master')
@section('title', 'Ejercicio 3')
@section('content')
    <h1>Ejercicio 3</h1>
    <form>
        <label for="estilo">Estilo:</label>
        <select name="estilo">
            <option value="1">Divergente</option>
            <option value="2">Convergente</option>
            <option value="3">Asimilador</option>
            <option value="4">Acomodador</option>
        </select>
        <label for="promedio">Promedio:</label>
        <input name="promedio" type="number"></input><br>
        <label for="recinto">Recinto:</label>
        <select name="recinto">
            <option value="Turrialba">Turrialba</option>
            <option value="Paraiso">Paraíso</option>
        </select><br>
        <input type="submit" value="Consultar"></input>
    </form>
@endsection