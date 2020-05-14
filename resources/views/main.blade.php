

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/app.css">
   <link rel="stylesheet" href="css/styles.css">
   <script type="text/javascript" src="js/app.js"></script>
    <title>Inicio</title>
</head>
<body>
<div class="container border p-0">
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<a class="navbar-brand" href="#" style="font-size:30px; ">
   <img id="brandSvg"src="images/brand.svg" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ml-5">
        <a class="nav-link rounded" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link rounded" href="#final">Links</a>
      </li>
      
   
    </ul>
    <div id="divContacto">
  <a href="{{url('/contacto')}}"><img id="imagenContacto" src="images/imagen_contacto_final.svg" alt="imagenCr100"></a>
  </div>
  </div>
</nav>

</header>    

@yield('content')

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark text-white" style=" margin-top:20rem;">

<!-- Footer Links -->
<div class="container text-center text-md-left">

<!-- Footer links -->
<div class="row text-center text-md-left mt-3 pb-3">

<!-- Grid column -->
<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold ">Cr-100 Servicios</h6><a class="text-white" href="{{url('/contacto')}}">
<p >Contactanos desde el formulario!</a></p>
<p >cr100servicios@gmail.com</p>
</div>
<!-- Grid column -->

<hr class="w-100 clearfix d-md-none">

<!-- Grid column -->
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold">Productos</h6>
<p>
<a class="text-white" href="{{url('/contacto')}}">Mensajeria</a>
</p>
<p>
<a class="text-white" href="{{url('/contacto')}}">Confiabilidad</a>
</p>
<p>
<a class="text-white" href="{{url('/contacto')}}">Rapidez</a>
</p>
<p>
<a href="#!"></a>
</p>
</div>
<!-- Grid column -->

<hr class="w-100 clearfix d-md-none">

<!-- Grid column -->
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold">Contacto Diseñador web</h6>
<p>
<a class="text-white" id="final" href="#!">1523651528</a>
</p>
<p>
<a href="#!"></a>
</p>
<p>
<a href="#!"></a>
</p>
<p>
<a href="#!"></a>
</p>
</div>

<!-- Grid column -->
<hr class="w-100 clearfix d-md-none">

<!-- Grid column -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold">Contacto Mensajería</h6>
<p>
<i class="fas fa-home mr-3"></i> Buenos aires </p>
<p>
<i class="fas fa-envelope mr-3"></i>Tel: 1138201064</p>
<p>
<i class="fas fa-phone mr-3"></i>  </p>
<p>
<i class="fas fa-print mr-3"></i></p>
</div>
<!-- Grid column -->

</div>
<!-- Footer links -->

<hr class="w-100 ">

<!-- Grid row -->
<div class="row d-flex align-items-center ">

<!-- Grid column -->
<div class="col-md-12 col-lg-12 ">

<!--Copyright-->
<p class="text-center text-md-center">© 2020 Copyright:
<!-- <a href=""> contacto -->
<strong>Luis Alejandro Ceballos</strong>
</a>
</p>

</div>
<!-- Grid column -->



</footer>
<!-- Footer -->
</div>
</body>
</html>