@extends('Template.template')
@section('plantillaweb')
    <h1>Tabla de multiplicar</h1>
</section>
    <form action="{{route('resultado_ejercicio1')}}" method="POST">
        <!--csrf_field es un metodo de autenticacion token-->
        {{ csrf_field() }}
        <label>Dijite el numero de la tabla </label>
        <input type="number" name="numero1">
        <input type="submit" name="btn_enviar" value="Presionar">
    </form>
@endsection
