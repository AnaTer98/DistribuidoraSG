<?php
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="container col-11 bg-gray-300 rounded mb-10">
    <div class="row justify-content-md-center">
      
<?php foreach($data['vacantes'] as $key){ ?>
  <div class="col-lg-3 col-md-6 col-sm-12">
    <div class="card m-3">
      <img src="<?= $key['rutaImg']?>"style="height:20rem;" class="card-img-top mt-1 mr-r ml-1" alt="">
      <div class="card-body">
        <h5 class="card-title"><?= $key['vacante']?></h5>
        <p class="card-text text-justify"><?= $key['descripcion']?></p>
        <a href="#" class="btn btn-primary">Se llenara un formulario para enviar correo con los datos</a>
      </div>
    </div>
  </div>
<?php } ?>


    </div>
</div>
<?php
include "views/components/footer.php";
?>