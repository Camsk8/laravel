@extends('Template.Template')
@section('plantillaweb')
    <h1>Salario Trabajador</h1>
    <form action="{{ route('resultado_Ej3') }}" method="post">
        {{csrf_field()}}
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
            <tbody>
                <tr>
                    <td>
                        <label for="horas_trabajadas">Ingresa las horas trabajadas:</label>
                    </td>
                    <td>
                        <input name="horas_trabajadas" step="1" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tarifa_de_pago">Ingresa el valor de la tarifa de pago:</label>
                    </td>
                    <td>
                        <input name="tarifa_de_pago"  step="1" type="number" />
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2" rowspan="1">
                        <input value="Procesar" type="submit" />
    </form>
@endsection
