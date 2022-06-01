<?php
session_start();
include_once "views/administrador/components/header.php";

?>

<?php 
$datosNor = array();
$datosMay = array();

    if(isset($data['catalogos']) && !empty($data['catalogos'])){
        foreach ($data['catalogos'] as $key) {
            if($key['tipo']=="normal"){
            array_push($datosNor,$key['id'],$key['tipo'],$key['rutaPdf']);         
            }
            if($key['tipo']=="mayorista"){
            array_push($datosMay,$key['id'],$key['tipo'],$key['rutaPdf']);
            }
        }
       
   
    }else{
#no pasa nada
    }



?>

<div class="container-fluid">

    <div class="card mb-4 py-1 " style="border-bottom: 0.30rem red solid !important;">
        <div class="card-body">
            <div class="d-sm-flex align-items-center">
                <h1 class="h3 mb-0 text-gray-800">Catalogos</h1>
            </div>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['mensaje'])&& !empty($_SESSION['mensaje'])){?>
           <div class="alert bg-<?= $_SESSION['mensaje'][0]?> alert-dismissible fade show  m-2" role="alert">
          <p class="text-light h5"><?= $_SESSION['mensaje'][1]?><strong><?= $_SESSION['mensaje'][2]?></strong></p>  
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
      
     <?php  $_SESSION['mensaje'] ="";}?>
<div class="container">
    <div class="row  row-cols-2">
        <div class="col">
        <form method="POST" action="index.php?c=formularios&a=<?php echo(empty($datosNor) ? "postCatalogo":"removeCatalogo")?><?php if(!empty($datosNor)){echo("&id=");?> <?= $datosNor[0]?><?php echo("&r=".$datosNor[2]); } ?>" enctype="multipart/form-data">
                <div class="card border">
                    <div class="card-header">
                        <h3 class="card-title">Catalogo Mayorista</h3>
                    </div>
                    <div class="card-body p-0 m-0  <?php echo(empty($datosNor) ? "bg-danger":"bg-success")  ?>">
                        <div class="position-relative  m-0 p-0 w-100  ">

                            <input type="text" name="tipo" class="d-none" value="normal" id="">
                            <div class="text-white text-center">
                                <img src="file-earmark-pdf.svg" class="img-fluid py-2 " style=" color:white;width: 30%;" alt="...">
                            </div>
                            <input type="file" <?php echo(empty($datosNor)? "":"disabled");?>  name="catalogo" class="<?php echo(empty($datosNor) ? "":"d-none")?>" required style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;width:100%;height:100%;opacity:0;" id="">
                        </div>
                    </div>
                    <div class="card footer ">
                        <h4 class="pl-2"><?php echo(empty($datosNor) ? "Selecciona TU CATALOGO":"LISTO!!") ?> </h4>
                        <div class="btn-group">
                            
                            <button type="submit" name="catalogoPdf" class="btn <?php echo(empty($datosNor) ? "btn-info":"btn-secondary")?> mx-2 my-1"><?php echo(empty($datosNor) ? "Guardar":"Eliminar")?></button> 
                        </div>
                    </div>
                </div>
            </form>
         
        </div>

        <div class="col">
            <!--Nueva tarjeta -->
            <form method="POST" action="index.php?c=formularios&a=<?php echo(empty($datosMay) ? "postCatalogo":"removeCatalogo")?><?php if(!empty($datosMay)){echo("&id=");?><?=$datosMay[0]?><?php echo("&r=".$datosMay[2]);}?>" enctype="multipart/form-data">
                <div class="card border">
                    <div class="card-header">
                        <h3 class="card-title">Catalogo Mayorista</h3>
                    </div>
                    <div class="card-body p-0 m-0  <?php echo(empty($datosMay) ? "bg-danger":"bg-success")  ?>">
                        <div class="position-relative  m-0 p-0 w-100  ">

                            <input type="text" name="tipo" class="d-none" value="mayorista" id="">
                            <div class="text-white text-center">
                                <img src="file-earmark-pdf.svg" class="img-fluid py-2 " style=" color:white;width: 30%;" alt="...">
                            </div>
                            <input type="file" <?php echo(empty($datosMay)? "":"disabled");?>  name="catalogo" class="<?php echo(empty($datosMay) ? "":"d-none")?>" required style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;width:100%;height:100%;opacity:0;" id="">
                        </div>
                    </div>
                    <div class="card footer ">
                        <h4 class="pl-2"><?php echo(empty($datosMay) ? "Selecciona TU CATALOGO":"LISTO!!") ?> </h4>
                        <div class="btn-group">
                         
                            <button type="submit" name="catalogoPdf" class="btn <?php echo(empty($datosMay) ? "btn-info":"btn-secondary")?> mx-2 my-1"><?php echo(empty($datosMay) ? "Guardar":"Eliminar")?></button> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>







<?php
include_once "views/administrador/components/footer.php";
?>