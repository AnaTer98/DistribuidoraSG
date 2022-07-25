<?php
include('views/components/header.php');
include('views/components/navegador.php');
?>

<div class="container">

  <div class="row">

    <div class="col-8 mb-2 mx-auto">
      <div class="card p-1">
        <img class="card-img-top" src="views/images/somos.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">¿Quiénes somos?</h5>
          <p class="card-text">
          Somos una distribuidora que trabaja bajo un sistema de gestión de compras y ventas para clientes mayoristas de la zona Metropolitana, que mediante la difusión en redes sociales y nuestra página de oficial de internet damos a conocer productos y servicios en el ramo de las comunicaciones y tecnología. Fijando su flujo de trabajo y distribución en el ámbito virtual y digital.
          </p>
          <p class="card-text">
          Nos encontramos ubicados en C. Xicoténcatl #6 A Col. Reynosa Tamaulipas, Azcapotzalco, Ciudad de México. Hidalgo (Tulancingo) – 3ª cerrada del tezontle casa 12 fracc. Vista Real.
          </p>
          <p class="card-text">
          Donde realizamos la gestión de pedidos, almacenamiento, logística y cuestiones administrativas de recursos materiales y humanos, esto con el fin de brindar seguridad y confianza ante los clientes, socios y la gente que se encuentre trabajando con nosotros, garantizando así la calidad que caracteriza de manera significativa a distribuidora SG ante un número importante de proveedores de la zona Metropolitana y sus alrededores.
        </p>
        
        </div>
      </div>
    </div>

    <div class="col-6 mb-2">
      <div class="card p-1">
        <img class="card-img-top" src="views/images/vision.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Visión</h5>
          <p class="card-text">
          Ser una empresa líder en la comercialización y distribución de nuestros productos y servicios en telefonía móvil, destacando por nuestro servicio ante las necesidades de nuestros clientes, socios y capital humano, buscando la obtención de una expansión en mercado nacional en sentido tecnológico y de innovación.
          </p>
         
        </div>
      </div>
    </div>

    <div class="col-6 mb-2">
      <div class="card p-1">
        <img class="card-img-top" src="views/images/mision.jpg " alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Misión</h5>
          <p class="card-text">
          Somos una empresa comercializadora y distribuidora de productos y servicios en el área de telefonía móvil. Confiable, eficiente y orientada a satisfacer las necesidades y aspiraciones de nuestros clientes y socios.
          </p>
         
        </div>
      </div>
    </div>

    <div class="col-6 mb-2 mx-auto">
      <div class="card p-1">
        <img class="card-img-top" src="views/images/valores.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nuestros valores</h5>
          <p class="card-text">
            <li>Servicio</li>
            <li> Ética </li>
            <li>Responsabilidad</li>
            <li>Honestidad</li>
            <li>Perseverancia</li>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Esto es para modificar -->
<?php
include('views/components/footer.php');
?>
<script>
  $(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    console.log("document is ready");
    $(".card").hover(
      function() {
        $(this).addClass('shadow-lg ').css('cursor', 'pointer');
        $(this).removeClass('p-1');
      },
      function() {
        $(this).removeClass('shadow-lg ');
        $(this).addClass('p-1').css('cursor', 'pointer');
      }
    );
  });
</script>