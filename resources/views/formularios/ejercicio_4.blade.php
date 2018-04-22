@extends('common.site_master')
@section('title', 'Ejercicio 4')
@section('content')
    <h1>Ejercicio 4</h1>
    <h3>Obtener su estilo de aprendizaje en base a casos similares</h3>
    <form method="POST" action="/ejercicio_4/consultar">
        {{ csrf_field() }}
        <label for="recinto">Recinto:</label>
        <select name="recinto" class="form-control">
            <option value="1">Turrialba</option>
            <option value="2">Paraíso</option>
        </select>
        <label for="promedio">Promedio:</label>
        <input name="promedio" type="number" class="form-control" required></input><br>
        <label for="sexo">Sexo:</label>
        <select name="sexo" class="form-control">
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select><br>
        <input type="submit" value="Consultar" class="btn btn-info"></input>
    </form>
    @if (!empty($resultado))
        <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font>
        <form name="resultado">
            Su estilo es {{ $resultado }}
        </form>
        <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font>
    @endif
@endsection