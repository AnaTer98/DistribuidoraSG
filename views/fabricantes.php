<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-6">
  <div class="content">
    <div class="row">
    <div class="col-8  mt-4 ml-3 ">
      <h5 class="font-weight-bold text-dark">Propuesta</h5>
      <p>Somos una empresa responsable, que ofrece distribuir tus productos de accesorios en telefonía entre otros prodcutos como laptops y celulares etc.
        Nosotros buscamos personas responsables y dispuestas ha trabajar, negociar con nosotros, para expandir nuestros negocios y lograr hacerlos mas rentables. 
      </p>
    </div>
    <div class="col">
      <img class="img-fluid mt-5" src="working.svg" alt="">
    </div>
    </div>
  </div>
    <div class="row">

        <div class="col">
            <div class="card bg-transparent border-0">
              <div class="card-body ">
            <form action="index.php?index.php&c=formularios&a=postPostular" enctype="multipart/form-data" method="post">
            <div class="form-group">
            <label for="nombre">Nombre de tu Empresa</label>
            <input type="text" name="empresa" class="form-control" placeholder="Giro" id="">
          </div>
            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" id="">
          </div>
          <div class="form-group">
            <label for="numero">Telefono<span class="text-danger"> (valido de 10 digitos)</span></label>
            <input type="number" name="numero" class="form-control" placeholder="Ingresa tu numero telefononico valido " id="" required>
          </div>
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="" class="form-control" placeholder="Ingresa tu correo electronico valido " required>
          </div>
          <div class="form-group">
            <label for="cv" class="">Selecciona tu archivo <span class="text-danger">(pdf)</span></label> <small>Este archivo debe de contener caracteristicas de lo que ofrece </small> 
            <input type="file" name="pdf" class="form-control-file" class="form-control" id="" required>
          </div>
         
          <button class="btn btn-success" type="submit"><i class="bi bi-file-earmark-font mr-1"></i>Enviar</button>
        </form>
              </div>
            </div>
        </div>
    </div>
</div>

<?php
include "views/components/footer.php";
?>
