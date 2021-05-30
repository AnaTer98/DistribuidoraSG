<?php session_start();   ?>
<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded">
    <a class="navbar-brand" href="#">
      <img src="views/images/logo.png" id="logo-nav" class="d-inline-block" width="110" height="35" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="views/promociones.php">Promociones</a> <span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Provedores
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Fabricantes</a>
            <a class="dropdown-item" href="#">Importadores</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Ingresar Orden de Compra</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Clientes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Catalogo</a>
              <a class="dropdown-item" href="#">Cotiza</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Atencion Personalizada </a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Empleados
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">¿Quienes somos?</a>
              <a class="dropdown-item" href="#">Vacantes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ingresa tu C.V. </a>
            </div>
          </li>
        


      </ul>
<!--Ingresar nuevo usuario-->
        <a href="./views/logins/view-new-login.php">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
            <i class="bi bi-person-badge"></i>

            <?php
            
            if(isset( $_SESSION['Usuario'])){
            ?>
            <?=  $_SESSION['Usuario'];?> 

            <?php }else{echo 'Registrate';} ?>
            
          </button>
        </a>

<!--Ingresar usuario registrado-->
<a href="./views/logins/view-ingresar-user.php">
          <button class="btn btn-outline-secondary ml-1 my-2 my-sm-0" type="submit">
          <i class="bi bi-arrow-bar-right"></i>

          Ingresar
          </button>
        </a>

    </div>
  </nav>