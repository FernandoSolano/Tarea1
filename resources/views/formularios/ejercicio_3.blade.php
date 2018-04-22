@extends('common.site_master')
@section('title', 'Ejercicio 3')
@section('content')
    <h1>Ejercicio 3</h1>
    <h3>Obtener su género en base a casos similares</h3>
    <form method="POST" action="/ejercicio_3/consultar">
        {{ csrf_field() }}
        <label for="estilo">Estilo:</label>
        <select name="estilo" class="form-control">
            <option value="1">Divergente</option>
            <option value="2">Convergente</option>
            <option value="3">Asimilador</option>
            <option value="4">Acomodador</option>
        </select>
        <label for="promedio">Promedio:</label>
        <input name="promedio" type="number" class="form-control" required></input><br>
        <label for="recinto">Recinto:</label>
        <select name="recinto" class="form-control">
            <option value="1">Turrialba</option>
            <option value="2">Paraíso</option>
        </select><br>
        <input type="submit" value="Consultar" class="btn btn-info"></input>
    </form>
    @if (!empty($resultado))
        <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font>
        <form name="resultado">
            Su sexo es {{ $resultado }}
        </form>
        <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font>
    @endif
@endsection