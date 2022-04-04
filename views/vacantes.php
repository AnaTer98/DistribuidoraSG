<?php
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="container col-11 bg-gray-300 rounded mb-10">
    <div class="row justify-content-md-center">
      
<?php foreach($data['vacantes'] as $key){ ?>
  <div class="col-lg-4 col-md-6 col-sm-12 " style="" >
    <div class="card m-3 " style="" >
      <img src="<?= $key['rutaImg']?>"style="" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title"><?= $key['vacante']?></h5>
        <pre class=""><p class="card-text"><?= $key['descripcion']?></p> </pre>
        <a href="#" class="btn btn-primary">Se llenara un formulario para enviar correo con los datos</a>
      </div>
    </div>
  </div>
<?php } ?>
<div class="col-lg-4 col-md-6 col-sm-12 " style="" >
    <div class="card m-3 " style="width:20rem;" >
      <img src="images/vac-00-02-54.jpeg"style="" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Patron</h5>
        <hr>
        <p class="card-text mt-0"><small> Una breve descripcion, en lo que consiste el trbajo el puesto dispoble por parte de la empres              -asdsdada </small>   </p>
        
        <a href="#" class="btn btn-primary">Ingresar datos</a>
      </div>
    </div>
  </div>

    </div>
</div>
<?php
include "views/components/footer.php";
?>