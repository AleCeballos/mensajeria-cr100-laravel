@extends('main')

@section("content")


@if(Session::has('message'))
<div class="alert alert-success" role="alert">
{{Session::get('success')}}
</div>
@endif

<!-- SECCION 1 -->
<div id="divBanner">

<img id="imagenBanner" src="images/backImage.jpg" alt="imagenBanner">


</div>

<div id="transparenciaBanner">
<div id="textoBanner">
<h2 id="tituloBanner">Confiablidad y rapidez</h2>
<p id="descripcionBanner">CR es un servicio de confiablidad que lleva años de trabajo en la zona céntrica y el gran Buenos Aires, sea parte de nuestra empresa y llegue a tiempo con sus responsabilidades de negocio. Pongase en contacto con nostros y deje en nuestras manos el crecimiento de su productividad. </p>
</div>



</div>


<!-- SECCION 2 -->
<!-- Tres cuadros -->
<div id="tresCuadros" class="container">
<div class="row">

<!-- Cuadro1 -->
<div id="cuadroUno" class="col-sm">
    
<img src="images/telefono.svg" alt="" id="iconoUno">
<h3>Contactanos desde Tu celular</h3>
<p>Escribinos desde contacto y te llamaremos para concretar el envío.</p>
</div>
<!-- cuadro2 -->
<div id="cuadroDos" class="col-sm">

<img src="images/moto.svg" alt="" id="iconoDos">
<h3>Servicio integral</h3>
<p><li>Nuestra empresa se dedica a:</li></p>
<p><li>logística y distribución.</li></p>
<p><li>Pagos y cobranzas.</li></p>
<p><li>Servicio de motos fijas y eventuales.</li></p>
</div>
<!-- cuadro3 -->
<div id="cuadroTres" class="col-sm">

<img src="images/reloj.svg" alt="" id="iconoTres">
<h3>Rapidez</h3>
<p>Tenemos la rapidez que se necesita, años de trabajo nos avalan.</p>
</div>
</div>

</div>
<!-- SECCION 3 -->
<div id="seccionTres">
<div class="row">

<div class="col-sm-6" id="tresCuadroUno">
<img src="images/flecha-centro.svg" alt="imagenFlecha" id="tresImagenFlecha">
<div id="tresTexto">
<h2>Mensajería en Capital Federal</h2>
<p>Realizamos nuestras actividades en todo el microcentro, enterate de nuestro servicio programado.</p>
</div>
</div>
<div class="col-sm-6" id="tresCuadroDos">
<img src="images/centro.svg" alt="imagenCentro" id="imagenCentro">
</div>

</div>
</div>

<!-- SECCION 4 -->
<div id="seccionCuatro">
<div class="row">


<div class="col-sm-6" id="cuatroCuadroDos">
<img src="images/pba.svg" alt="imagenCentro" id="imagenPba">
</div>
<div class="col-sm-6" id="cuatroCuadroUno">
<img src="images/flecha-pba.svg" alt="imagenFlecha" id="cuatroImagenFlecha">
<div id="cuatroTexto">
<h2>Mensajería a todo el Gran Buenos Aires</h2>
<p>Llegamos a tiempo a todo el gran Buenos aires.</p>
</div>
</div>
</div>
</div>



@endsection