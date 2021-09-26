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
      <h1>Resultado</h1>
    </div>
  </div>
</div>
<!-- fin header -->

<style>
  table {
    border-radius: 0px;
    width: 80%;
    margin: auto;
    margin-bottom: 2rem;
    margin-top: 2rem;
    font-family: 'Anton', sans-serif;
    font-size: 2rem;
    text-transform: uppercase;
    text-align: center;
  }
</style>

<?php

include 'includes/conexion.php';

$busqueda = $_GET["buscar"];

mysqli_set_charset($conexion, "utf-8");

$consulta = "select * from libros where autor like '%$busqueda%'";


$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {

  echo "<table class='table-bordered table-dark'> <tr> <td>";
  echo "<p>id</p>";
  echo $fila['cod_libro'] .  "&nbsp;<br></td> <td> ";
  echo "<p>area</p>";
  echo $fila['area'] . "&nbsp;<br></td> <td> ";
  echo "<p>no. clasificacion</p>";
  echo $fila['clasificacion'] . "&nbsp;<br></td> <td> ";
  echo "<p>materia</p>";
  echo $fila['materia'] . "&nbsp;<br></td> <td> ";
  echo "<p>cantidad</p>";
  echo $fila['cantidad'] . "&nbsp;<br></td> <td> ";
  echo "<p>nombre</p>";
  echo $fila['nombre'] . "&nbsp;<br></td> <td> ";
  echo "<p>autor</p>";
  echo $fila['autor'] . "&nbsp;<br></td> <td> ";
  echo "<p>editorial</p>";
  echo $fila['editorial'] . "&nbsp;<br></td> <td> ";
  echo "<p>edicion</p>";
  echo $fila['edicion'] . "&nbsp;<br></td> <td> ";
  echo "<p>año</p>";
  echo $fila['fecha'] . "&nbsp;<br></td> <td> ";
  echo "<p>no.paginas</p>";
  echo $fila['paginas'] . "&nbsp;<br></td> <td> ";
  echo "<p>temas</p>";
  echo $fila['tema'] . "&nbsp;</td> <td> <tr> </table>";
  echo "<br>";
  echo "<br>";
}

mysqli_close($conexion);

if (mysqli_num_rows($resultados) == 0) {
  echo "<br><br><br><br><br><h1 id=resultado>No existen registros en la base de datos.</h1>";
}

?>
<!-- inicio footer -->
<br>
<br>
<br>
<br>
<br>
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