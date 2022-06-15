@extends('Template.Template')
@section('plantillaweb')
    <h1>sumar los numeros</h1>
    <form action="{{ route('resultado_Ej5') }}" method="post">
        {{csrf_field()}}
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
            <tbody>
                <tr>
                    <td>
                        <label >Digite el radio:</label>
                        <input type="number" name="radio">
                    </td>
                    <td>
                        <label >Digite la altura:</label>
                        <input type="number"  name="altura">
                        <input type="submit" name="btn_enviar" value="Presionar">
                    </td>
                </tr>
                <tr>
                <tr align="center">
                    <td colspan="2" rowspan="1">
    </form>
@endsection
