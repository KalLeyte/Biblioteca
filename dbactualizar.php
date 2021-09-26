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


<br>
<br>
<br>
<br>

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

$id = $_POST["id"];
$area = $_POST["area"];
$mat = $_POST["materia"];
$cla = $_POST["clasificacion"];
$can = $_POST["cantidad"];
$nom = $_POST["nombre"];
$aut = $_POST["autor"];
$edici = $_POST["editorial"];
$edi = $_POST["edicion"];
$an = $_POST["fecha"];
$pag = $_POST["paginas"];
$tema = $_POST["tema"];


$resultados = mysqli_query($conexion, "UPDATE libros set  area='$area', materia='$mat', clasificacion ='$cla', cantidad ='$can', nombre ='$nom', autor='$aut', editorial='$edici', edicion='$edi', fecha='$an', paginas='$pag', tema ='$tema'
  where cod_libro='$id' ")
  or die("<h1 id=resultado>error al actualizar</h1>");

mysqli_close($conexion);

echo "<h1 id=resultado>datos Actualizados correctamente</h1>";
?>
<!-- inicio footer -->
<br>
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