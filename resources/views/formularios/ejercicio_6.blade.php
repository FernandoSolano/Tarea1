@extends('common.site_master')
@section('title', 'Ejercicio 6')
@section('content')
    <h1>Ejercicio 6</h1>
    <form method="POST" action="/ejercicio_6/consultar">
        {{ csrf_field() }}
        <label for="confiabilidad">Confiabilidad:</label>
        <select name="confiabilidad">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="cantidad_enlaces">Cantidad de enlaces:</label>
        <input name="cantidad_enlaces" type="number"></input><br>
        <label for="capacidad">Capacidad:</label>
        <select name="capacidad">
            <option value="1">Baja</option>
            <option value="2">Media</option>
            <option value="3">Alta</option>
        </select><br>
        <label for="costo_enlaces">Costo de los enlaces:</label>
        <select name="costo_enlaces">
                <option value="1">Bajo</option>
                <option value="2">Medio</option>
                <option value="3">Alto</option>
        </select><br>
        <input type="submit" value="Consultar"></input>
    </form>
    <form name="resultado">
            Resultado:<input name="txt_resultado" value="@if (!empty($resultado)){{ $resultado }}@endif">
    </form>
@endsection