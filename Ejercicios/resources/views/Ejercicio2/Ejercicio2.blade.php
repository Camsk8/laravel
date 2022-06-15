@extends('Template.Template')
@section('plantillaweb')
    <h1>Tres numeros</h1>
    <form action="{{ route('resultado_Ej2') }}" method="post">
        {{csrf_field()}}
        <div class="col">
        <label>Digite el numero 1</label>
        <input type="number" name="numero1">
        </div>
        <div class="col">
            <label>Digite el numero 2</label>
            <input type="number" name="numero2">
        </div>
        <div class="col">
            <label>Digite el numero 3</label>
            <input type="number" name="numero3">
        </div>
        <input type="submit" name="btn_enviar" value="Presionar">
    </form>
@endsection
