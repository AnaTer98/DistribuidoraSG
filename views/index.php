<?php
include("./views/components/header.html");



//<!--Carrusel-->

include("./views/components/navegador.html");


include('./views/components/carrusel.html');




?>

<!--Contenido-->
<div class=" container bg-light" id="contenido-bajo">
    <div class="row " >
    <div class="col-12">
        <h1>Contenido::</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    
    </div>
    </div>

</div>

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
