@extends('common.site_master')
@section('title', 'Ejercicio 5')
@section('content')
    <h1>Ejercicio 5</h1>
    <form>
        <div class="form-group">
            <h3>Información Demográfica</h3>
            <label for="edad">Edad:</label>
            <input name="edad" type="number"></input><br>
            <label for="sexo">Sexo:</label>
            <select name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group">
            <h3>Antecedentes</h3>
            <label for="experiencia">Experiencia:</label>
            <select name="experiencia">
                <option value="B">Principiante</option>
                <option value="I">Intermedio</option>
                <option value="A">Avanzado</option>
            </select><br>
            <label for="cantidad_repitiendo">Cantidad de veces como profesor:</label>
            <input name="cantidad_repitiendo" type="number"></input><br>
            <label for="disciplina">Disciplina:</label>
            <select name="disciplina">
                <option value="ND">ND</option>
                <option value="DM">DM</option>
                <option value="O">O</option>
            </select><br>
            <label for="experiencia_computadoras">Experiencia con computadoras:</label>
            <select name="experiencia_computadoras">
                <option value="A">A</option>
                <option value="H">H</option>
                <option value="L">L</option>
            </select><br>
            <label for="experiencia_tecnologia_web">Experiencia implementando tecnologías Web en sus lecciones:</label>
            <select name="experiencia_tecnologia_web">
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="S">S</option>
            </select><br>
            <label for="experiencia_sitios_web">Experiencia utilizando sitios Web:</label>
            <select name="experiencia_sitios_web">
                <option value="N">N</option>
                <option value="S">S</option>
                <option value="O">O</option>
            </select>
            <input type="submit" value="Consultar"></input>
        </div>
    </form>
@endsection