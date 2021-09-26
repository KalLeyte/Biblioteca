<?php $nombrePagina = 'Biblioteca CBTA 35'; ?>

<?php
include 'includes/header.php';
?>

<!-- barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>

<!-- fin de barra de navegacion -->

<!-- inicio header -->
<?php
session_start();
if (!isset($_SESSION["USUARIO"])) {
  header("location:index.php");
}

?>

<div class="bgimagen-textura">
  <div class="container animated wow zoomIn mt-5">
    <div class="titulo-bgimagen my-5">
      <h1>Bienvenidos</h1>
    </div>
  </div>
</div>

<div class="text">
  <p>en esta pagina podras consultar, insertar, actualizar y eliminar los datos de los libros que se encuentran en la biblioteca del cbta 35 "leona vicario"</p>
</div>
<div class="container cbta">
  <p>Una biblioteca puede definirse, desde un punto de vista estrictamente etimológico, como el lugar donde se guardan libros. Sin embargo, en la actualidad esta concepción se ha visto superada para pasar a referirse tanto a las colecciones bibliográficas y audiovisuales como a las instituciones que las crean y las ponen en servicio para satisfacer las necesidades de los usuarios.
    Desde el 24 de octubre de 1997 se celebra el Día de la biblioteca.</p>
  <img src="img/cbta.jpg" alt="">
</div>
<!-- fin header -->

<br>
<br>
<br>
<br>
<!-- inicio footer -->
<?php
include 'includes/footer.php';
?>
<!-- fin footer -->

<!-- archivos js -->
<?php
include 'includes/scripts.php';
?>
<!-- fin archivos js -->
</body>

</html>