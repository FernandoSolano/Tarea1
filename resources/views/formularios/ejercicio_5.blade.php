@extends('common.site_master')
@section('title', 'Ejercicio 5')
@section('content')
    <h1>Ejercicio 5</h1>
    <h3>Obtener su tipo de profesor en base a casos similares</h3>
    <form method="POST" action="/ejercicio_5/consultar">
        {{ csrf_field() }}
        <div class="form-group">
            <h3>Información Demográfica</h3>
            <label for="edad">Edad:</label>
            <input name="edad" type="number" class="form-control" required></input><br>
            <label for="sexo">Género:</label>
            <select name="sexo" class="form-control">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
                <option value="3">No especificar</option>
            </select>
        </div>
        <div class="form-group">
            <h3>Antecedentes</h3>
            <label for="autoevaluacion">Autoevaluación de la habilidad con la materia del curso:</label>
            <select name="autoevaluacion" class="form-control">
                <option value="1">Principiante</option>
                <option value="2">Intermedio</option>
                <option value="3">Avanzado</option>
            </select><br>
            <label for="cantidad_repitiendo">Cantidad de veces que ha instruido el curso:</label>
            <input name="cantidad_repitiendo" type="number" class="form-control" required></input><br>
            <label for="disciplina">Disciplina o área de expertis:</label>
            <select name="disciplina" class="form-control">
                <option value="1">DM</option>
                <option value="2">ND</option>
                <option value="3">O</option>
            </select><br>
            <label for="experiencia_computadoras">Habilidad usando computadoras:</label>
            <select name="experiencia_computadoras" class="form-control">
                <option value="1">Baja</option>
                <option value="2">Promedio</option>
                <option value="3">Alta</option>
            </select><br>
            <label for="experiencia_tecnologia_web">Utiliza tecnologías Web en sus lecciones:</label>
            <select name="experiencia_tecnologia_web" class="form-control">
                <option value="1">Nunca</option>
                <option value="2">A veces</option>
                <option value="3">A menudo</option>
            </select><br>
            <label for="experiencia_sitio_web">Utiliza este sitio Web:</label>
            <select name="experiencia_sitio_web" class="form-control">
                <option value="1">Nunca</option>
                <option value="2">A veces</option>
                <option value="3">A menudo</option>
            </select><br>
            <input type="submit" value="Consultar" class="btn btn-info"></input>
        </div>
    </form>
    @if (!empty($resultado))
        <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font>
        <form name="resultado">
            Su tipo es {{ $resultado }}
        </form>
        <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font>
    @endif
@endsection