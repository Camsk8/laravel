@extends('Template.template')
@section('plantillaweb')
    <h2>Ordenar 3 numeros</h2>
</section>
    <form action="{{route('resultado_Ej2')}}" method="POST">
        <!--csrf_field es un metodo de autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
              <div class="col col-lg-2 col-md-4">
                <label>Dijite el numero 1: </label> 
                <input type="number" name="numero1">
              </div>
              <div class="col col-lg-2 col-md-4">
                <label>Dijite el numero 2: </label> 
                <input type="number" name="numero2">
              </div>
              <div class="col col-lg-2 col-md-4">
                <label>Dijite el numero 3: </label> 
                <input type="number" name="numero3">
              </div>
            </div>
          </div>
        <input type="submit" name="btn_enviar" value="Presionar">
    </form>
@endsection
