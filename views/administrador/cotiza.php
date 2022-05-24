<?php
include_once"views/administrador/components/header.php";
?>
<div class="container-fluid">
<div class="card mb-4 py-1 border-bottom-success">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Cotiza </h1>
      </div>
    </div>
  </div>
<div class="row ">

  <div class="col-xl-5">
    <form action="index.php?c=formularios&a=postCotiza" enctype="multipart/form-data" method="post">
      <div class="card bg-sm-dark">
        <div class="card-header"><h5 class="card-title mb-0">Tarjeta de precentación</h5></div>
        <div class="card-body">
        <div class="form-group">
        <label for="img">Targeta de Precentación</label><br>
        <input type="file" name="img" id="img">
      </div>
      <div class="form-group">
        <img src="https://cdn.wallpapersafari.com/56/63/COuzNw.jpg"class="w-100" alt="">
      </div>
      <button type="submit" class="btn btn-outline-success ">Guardar</button>
        </div>
      </div>
    </form>

  </div>
  <div class="col-xl-7">
      <div class="row row-cols-lg-2 row-cols-1">
        <div class="col mt-2">
          <div class="card border-success">
            <div class="card-header d-flex">
              <h5 class="card-title mr-auto mb-0">
                Tarjeta de Presentación
              </h5>
              <span class=""><i class="bi bi-person-badge "></i></span>
            </div>
          
            <img src="images/vac-00-02-54.jpeg" class="card-img-bottom" alt="" srcset="">
          
          </div>
        </div>
       
      
     
      </div>
  </div>
</div>
</div>
<?php 
include_once"views/administrador/components/footer.php";
?>