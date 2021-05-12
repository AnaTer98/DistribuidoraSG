<?php
    
    include("./components/header.html");


   
  ?>
  <div class="container">


    <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Nuestros productos y servicios</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Plataforma de Recargas</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Accesorios</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Telefonía</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Cómputo</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Servicios</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Novedades</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    
    <!-- Page Content -->
    <div id="page-content-wrapper"class="bg-light">
    <!--Aqui importar el navegador -->
      <?php include('views/components/navegador.html');?>
      <!--El botton para mostrar el menu lateral-->
    
      <button class="btn btn-warning my-2 my-sm-0" id="menu-toggle" type="submit"><i class="bi bi-bar-chart-steps"></i></button>
    
         
    
    
      <div class="container-fluid ">
        <h1 class="mt-4">Publicaciones</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore laborum eius, debitis voluptatum at possimus saepe! Iure officiis tempore placeat illo exercitationem esse, impedit perferendis recusandae maiores laudantium vel et veniam accusantium sed optio modi quisquam accusamus delectus nesciunt eveniet corporis magnam qui itaque mollitia. Consectetur temporibus enim libero mollitia magnam veniam, nobis architecto voluptatem eos eum, delectus quod quas, molestiae provident. Ullam ex atque magnam, dolor blanditiis, expedita dignissimos dicta modi repellat et quae excepturi fugit est odit adipisci consequatur error eaque quam ducimus perferendis voluptas enim porro, delectus nesciunt. Dignissimos blanditiis dolorem nisi, officiis fugit quisquam cupiditate ipsam.</p> 
      </div>
    </div>
    </div>
  </div>
  
    <?php
include('./components/footer.html');
?>

