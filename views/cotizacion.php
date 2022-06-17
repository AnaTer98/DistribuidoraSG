<?php
session_start();
include "views/components/header.php";
include "views/components/navegador.php";
?>
<div class="content bg-light mx-auto rounded col-11">
<div class="card-columns pt-3">
<?php if(isset($data['cardCotiza'])){foreach($data['cardCotiza'] as $key){?>

          <div class="card border-success">
            <div class="card-header d-flex py-1">
              <h5 class="card-title mr-auto my-1">
                Tarjeta de Presentación
              </h5>
              <span class="icon my-1"><i class="bi bi-person-badge "></i></span>
            </div>
            <img src="<?= $key['rutaImg']?>" class="card-img-bottom" alt="" srcset="">
          </div>
        <?php }}?>

    </div>
    
</div>

<?php
include "views/components/footer.php";
?>
