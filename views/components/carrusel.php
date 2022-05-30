<link href="styles/style.css" rel="stylesheet" type="text/css">
<div  class="container <?php echo(empty($data["Imagenes"])?"d-none ":"");?>col-12 " id="carrusel">
  <div class="row mx-auto" style="height: 30rem; width: 100%;"id="con-img">
    <div class="mx-auto">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        
  <?php $con=0; foreach ($data["Imagenes"] as $key){  
    $actives='';
    if($con==0){ 
      $actives = 'active';
    } ?>
    <div class="carousel-item <?= $actives;?>"style="height: 30rem; width: 100%;">
              <img src="<?= $key['rutaImg']?>" class="d-block w-100 h-100" alt="...">
            </div>
     
  <?php $con++;} ?>
     
          </div>
        <a class="carousel-control-prev bg-dark" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next bg-dark" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>  
  </div>  
</div>


