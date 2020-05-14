@extends('main')

@section("content")

<div class="col-lg-8  text-white rounded mt-5 pb-5 bg-dark" id="formulario">

<div class="text-center p-2">
<h1 style="font-weight:bold;">Contacto</h1>
</div>
         <form action={{route('contact')}} method="post" >
       @csrf
 <div class="form-group">
    <label for="email">Correo electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">
Nunca compartiremos su correo electrónico con alguien más.</small>
  </div>
            <div class="form-group">
                <label for="subject">Asunto</label>
                    <input type="text" class="form-control" id="subject" name="subject">
            </div>
 
            <div class="form-group">
                <label for="name">Nombre y apellido</label>
                    <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="phone">Teléfono</label>
                    <input type="phone" class="form-control" id="phone" name="phone">
            </div>
 

  <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
            </div>
  
<div class="text-center ">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
         
        

</div>

@endsection