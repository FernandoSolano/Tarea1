@extends('common.site_master')
@section('title', 'Ejercicio 6')
@section('content')
    <h1>Ejercicio 6</h1>
    <form>
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
            <option value="Low">Baja</option>
            <option value="Medium">Media</option>
            <option value="High">Alta</option>
        </select><br>
        <label for="costo_enlaces">Costo de los enlaces:</label>
        <select name="costo_enlaces">
                <option value="Low">Bajo</option>
                <option value="Medium">Medio</option>
                <option value="High">Alto</option>
        </select>
        <input type="submit" value="Consultar"></input>
    </form>
@endsection