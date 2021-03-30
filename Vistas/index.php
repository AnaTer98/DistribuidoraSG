<?php
include("./Vistas/components/header.php");

?>

<?php
include("./Vistas/components/navegador.html");
?>

<!--Carrusel-->
<div class=" bg-primary  mx-auto rounded shadow p-3" style="width:90%;padding-bottom: 1em;padding-top: 1em;   margin-top: -2em;background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);">
    <img src="./Vistas/images/01.png" class="img-fluid mx-auto d-block" alt="Prueba jajaj!">
</div>
<!--Contenido-->
<div class="container">
    <div class="row row-cols-3">
        <div class="col-3 border border-info"> 
            <h3>Information</h3>
        </div>
        <div class="col-6"><
                 
        </div>
        <div class="col-3"><h1>Derecha</h1></div>
    </div>

</div>
<h1>Prueba de conexion a la base de datos ::</h1>
<?php
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


<?php
    include("./Vistas/components/footer.php");
?>
