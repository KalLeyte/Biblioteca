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
      <h1>area de eliminacion</h1>
    </div>
  </div>
</div>
<!-- fin header -->
<div class="text">
  <p>ingresa el ID del libro para eliminar sus datos almacenados</p>
  <p>en caso de no conocer el "ID", se puede obtener en el area de "busqueda de libros por"</p>
</div>
<div class="container mt-5 mb-5 table-hover table-dark border border-primary contact">
  <form action="dbeliminar.php" method="post" class="ver" name="tuformulario">
    <table border="0" align="center">
      <tr>
        <br>
        <td><label>ID: <input class=" border-dark" type="text" name="txtclave" required=""></label>
          <input class="btn btn-dark" type="submit" name="enviando" onclick="pregunta()" value="eliminar">
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