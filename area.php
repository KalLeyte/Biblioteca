<?php $nombrePagina = 'Area de Busqueda'; ?>
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
      <h1>area de busqueda</h1>
    </div>
  </div>
</div>
<!-- fin header -->
<div class="text">
  <p>ingresa el nombre del area para mostrar sus datos almacenados</p>
</div>
<div class="container mt-5 mb-5 table-hover table-dark border border-primary contact">
  <form action="select_area.php" method="get" class="ver">
    <table border="0" align="center">
      <tr>
        <br>
        <td><label>nombre del area: <input class=" border-dark" type="text" name="buscar" required=""></label>
          <input class="btn btn-dark" type="submit" name="enviando" value="buscar">
        <td>
          <hr>
      </tr>
    </table>
  </form>
  <hr>
</div>
<!-- inicio footer -->
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