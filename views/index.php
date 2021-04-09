<?php
include("./views/components/header.html");



//<!--Carrusel-->

include("./views/components/navegador.html");


include('./views/components/carrusel.html');




?>

//<!--Contenido-->
<div class="container bg-light">
    <div class="row row-cols-3 bg-light text-warning">
        <div class="col-3 border"> 
            <h3>Information</h3>
        </div>
        <div class="col-6"><
                 
        </div>
        <div class="col-3"><h1>Derecha</h1></div>
    </div>

</div>
<h1>Prueba de conexion a la base de datos ::</h1>
<?php
  include("./views/components/footer.html");

  
    include('./database.php');
        $objeto = new Database();
        $enlace = $objeto->conexion();

        $consulta = "SELECT * FROM task";
        $resultado = $enlace->prepare($consulta);
        $resultado->execute();
        $datos = $resultado->fetchAll();

        var_dump($datos);
        foreach($datos as $dat){
            echo $dat['title']."<br>";
        }

        

  
   
?>
