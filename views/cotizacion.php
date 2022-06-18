<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-11">

<?php if(isset($data['cardCotiza']) && !empty($data['cardCotiza'])){echo('<div class="card-columns pt-3">'); foreach($data['cardCotiza'] as $key){?>

          <div class="card border-success">
            <div class="card-header d-flex py-1">
              <h5 class="card-title mr-auto my-1">
                Tarjeta de Presentación
              </h5>
              <span class="icon my-1"><i class="bi bi-person-badge "></i></span>
            </div>
            <img src="<?= $key['rutaImg']?>" class="card-img-bottom" alt="" srcset="">
          </div>
        <?php }echo("</div>");}else{ ?>
          <div class="container mx-aut w-50 pt-3 pb-3" >
          <div class="card shadow-sm border text-center pt-3 shadow-sm">
            <div class="card-header bg-white border-bottom-info">
              <h4 class="card-title">No hay registros</h4>
            </div>
            <div class="card-body">
              <p class="card-text h5">Vuelve más tarde! </p>
              <img src="escritorio.svg" class="img-profile  w-50  "alt="" srcset="">
            </div>
          </div>  
          </div> 
  <?php }?>

  
    
</div>

<?php
include "views/components/footer.php";
?>
