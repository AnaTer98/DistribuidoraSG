<?php
include 'components/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card mb-4 py-1 border-bottom-info">
    <div class="card-body">
      <div class="d-sm-flex align-items-center ">
        <h1 class="h3 mb-0 text-gray-800">Publicaciones</h1>
      </div>
    </div>
  </div>


  <!--Contenido aqui-->
  <div class="row">
   

      <div class="col-xl-4">
       
        <form action="index.php">
          <div class="card " style="border-right: 0.25rem solid #36b9cc !important;">
          <div class="card-body">
          <div class="form-group ">
            <label for="descripcion">Descripción </label>
            <input type="text" name="descripcion" class="form-control" id="">
            </div>
            <div class="form-group mb-0">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control-file" id="" required>
            </div>
            <img src="images/vac-21-02-55.jpeg" class="w-100 my-1 "alt="">

<button type="submit" class="btn btn-success "><i class="bi bi-box-arrow-in-up"></i> Agregar</button>

          </div>
          
        
          </div>
        </form>
        
      </div>



   
    <div class="col-xl-8">
      <!--La segunda columna principal -->
      <div class="row row-cols-2">
        <!--Nuevo contenedor para las tarjetas-->
      <div class="col">
        <div class="card">
        <div class="card-header">
          <img src="images/logos.jpg" style="width:3rem;height:3rem;"class="rounded-circle d-inline"alt="">
            <h5 class="card-title ml-1 pb-10 d-inline">Distribuidora SG</h5>
            </div>
          <div class="card-body">            
            <p class="card-text pb-0">Esta oferta es unico durante los proximos dias </p>
          </div>
          <img src="images/04-17-22-21-44-09.jpeg" class="card-img-top rounded-0 " alt="...">
          <div class="card-footer" style="">
          <small class="text-muted"> Hace 10 minutos </small>
        </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
        <div class="card-header">
          <img src="images/logos.jpg" style="width:3rem;height:3rem;"class="rounded-circle d-inline"alt="">
            <h5 class="card-title ml-1 pb-10 d-inline">Distribuidora SG</h5>
            </div>
          <div class="card-body">            
            <p class="card-text pb-0">Esta oferta es unico durante los proximos dias </p>
          </div>
          <img src="images/04-17-22-21-44-09.jpeg" class="card-img-top rounded-0 " alt="...">
          <div class="card-footer" style="">
          <small class="text-muted"> Hace 10 minutos </small>
        </div>
        </div>
      </div>
    </div>

    </div>



  </div>

</div>
<br><br><br><br><br><br>
<!-- /.container-fluid -->

<?php
include 'components/footer.php';
?>