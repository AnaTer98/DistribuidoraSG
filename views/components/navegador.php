<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded">
  <a class="navbar-brand" href="index.php">
    <img src="views/images/logo.png" id="logo-nav" class="d-inline-block" width="110" height="35" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    

      <li class="nav-item ">
        <a class="nav-link active" href="index.php?c=vistas&a=fabricantes" id="navbarDropdown" role="button" >
          Fabricantes e Importadores
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?c=vistas&a=catalogos">Catalogos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?c=vistas&a=cotiza">Cotiza</a>
         
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Colaboradores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?c=vistas&a=qsomos">¿Quienes Somos?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?c=vistas&a=vacantes">Vacantes</a>
        </div>
      </li>
    </ul>
  <!--Aqui sera en caso de que ya esta registrado-->
  <?php if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){ ?>

    <ul class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle py-0" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 py-1 d-none d-lg-inline text-gray-800 "><?= $_SESSION['usuario'][0]?></span>
        <img class="img-profile  rounded-circle" style="width: 3rem; height: 3rem;" src="images/userIcon.svg">
      </a>
      <!-- Dropdown - User Information -->

      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <?php if("admin"== $_SESSION["usuario"][1]){?>
      <a class="dropdown-item" href="index.php?c=vistasAd&a=administrador">
          <i class="bi bi-gear mr-2"></i>
          Administrador
        </a>
      
        <div class="dropdown-divider"></div>
        <?php } ?>
        <a class="dropdown-item" href="index.php?c=acciones&a=cerrar" >
          <i class="bi bi-box-arrow-left mr-2"></i>
          Salir
        </a>
      </div>
    </ul>
    <!--Ingresar nuevo usuario-->
    <?php } else{?>
    <a href="index.php?c=vistas&a=registrar">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
        <i class="bi bi-person-badge"></i>
        Registrar  
      </button> 
      </a>
    <!--Ingresar usuario registrado-->
    
    <a href="index.php?c=vistas&a=ingresar">
      <button class="btn btn-outline-secondary ml-1 my-2 my-sm-0" type="submit">
        <i class="bi bi-arrow-bar-right"></i>
        Ingresar
      </button>
    </a>
    <?php }?>
<!-- Casi acaba aqui el navegador -->
  </div>
</nav>