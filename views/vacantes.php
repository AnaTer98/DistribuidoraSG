<?php
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="container bg-light rounded pt-3 mt-0  ">
    <div class=" container">
      <div class="card-columns m-2">     
      <?php if(isset($data['vacantes'])&& !empty($data['vacantes'])){
        foreach ($data['vacantes'] as $key ) { ?>
         
            <div class="card " style="width:21rem;">
            <img src="<?= $key['rutaImg']?>" alt="Esperame" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $key['vacante']?></h5>
              <p class="card-text"><?= $key['descripcion']?></p>
              <a href="" class="btn btn-success"><i class="bi bi-briefcase mr-1"></i> Postular</a>
            </div>
            </div>
      
          
     <?php } }else{}?>

    
     
    </div><!--El de la segunda columna-->

    </div>


</div>
<?php
include "views/components/footer.php";
?>