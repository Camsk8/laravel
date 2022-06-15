@extends('Template.Template')
@section('plantillaweb')
    <h2>Ejercicio 6</h2>

    <form action="{{ route('resultado_Ej6') }}" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label>Digite el nombre</label>
            <input type="text" name="nombre">
        </div>
        <div class="col">
            <label>Digite la nota del primer parcial </label>
            <input type="number" name="parcial1" step="0.001">
        </div>
        <div class="col">
            <label>Digite la nota del examen final </label>
            <input type="number" name="parcial2" step="0.001">
        </div>
        <input type="submit" name="btn_enviar" value="Presionar">
    </form>
@endsection