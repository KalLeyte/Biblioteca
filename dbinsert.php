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

$area = $_GET["area"];
$mat = $_GET["materia"];
$cla = $_GET["clasificacion"];
$can = $_GET["cantidad"];
$nom = $_GET["nombre"];
$aut = $_GET["autor"];
$edici = $_GET["editorial"];
$edi = $_GET["edicion"];
$fe = $_GET["fecha"];
$pag = $_GET["paginas"];
$tem = $_GET["tema"];


mysqli_set_charset($conexion, "utf-8");
$consulta = "INSERT INTO libros(area, materia, clasificacion, cantidad, nombre, autor, editorial, edicion, fecha, paginas, tema) Values ('$area','$mat','$cla','$can','$nom','$aut','$edici','$edi','$fe','$pag','$tem')";
$resultados = mysqli_query($conexion, $consulta);

if ($resultados == false) {
  echo "<h1 id=resultado>error al guardar datos</h1>";
} else {

  echo "<h1 id=resultado>registro guardado</h1>";
}
mysqli_close($conexion);

?>
<!-- fin consulta -->
<br>
<br>
<br><br>
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