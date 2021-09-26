<?php $nombrePagina = 'Resultado'; ?>

<?php
include 'includes/header.php';
?>

<!-- barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>

<!-- fin de barra de navegacion -->
<?php
session_start();
if (!isset($_SESSION["USUARIO"])) {
  header("location:index.php");
}

?>
<!-- inicio header -->
<div class="bgimagen-textura">
  <div class="container animated wow zoomIn mt-5">
    <div class="titulo-bgimagen my-5">
      <h1>resultado</h1>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- inicio consulta -->
<br>
<br>
<?php

include 'includes/conexion.php';

$clave = $_POST['txtclave'];

mysqli_query($conexion, "DELETE FROM libros where cod_libro='$clave'")
  or die("<h1 id=resultado>error al eliminar los datos</h1>");

mysqli_close($conexion);

echo "<h1 id=resultado>datos borrados correctamente</h1>";

?>
<!-- fin consulta -->
<br>
<br>
<br>
<br>
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