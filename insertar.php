<?php $nombrePagina = 'Inserte Datos'; ?>

<!-- header -->
<?php
include 'includes/header.php';
?>
<!-- fin header -->
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
      <h1 class="animated wow zoomIn mt-5"><?php echo $nombrePagina = 'inserte la informacion del libro en el formulario' ?></h1>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- CONTENIDO PRINCIPAL -->
<div class="container mt-5 mb-5 table-hover table-dark border border-primary contact">
  <div class="row">
    <div class="col-md-12 text-center ver">
      <!-- formulario de contacto -->
      <form action="dbinsert.php" method="get">
        <table border="0" align="center">
          <tr>
            <hr>
            <td>area a la que pertenece: </td>
            <td><label for="area"></label>
              <input class="border-dark" type="text" name="area" required="">
            </td>
          </tr>
          <td>materia: </td>
          <td><label for="materia"></label>
            <input class="border-dark" type="text" name="materia" required="">
          </td>
          </tr>
          <td>no. clasificacion: </td>
          <td><label for="clasificacion"></label>
            <input class="border-dark" type="text" name="clasificacion" required="">
          </td>
          </tr>
          <td>cantidad: </td>
          <td><label for="cantidad"></label>
            <input class="border-dark" type="number" name="cantidad" required="">
          </td>
          </tr>
          <td>nombre del libro: </td>
          <td><label for="nombre"></label>
            <input class="border-dark" type="text" name="nombre" required="">
          </td>
          </tr>
          <tr>
            <td>autor: </td>
            <td><label for="autor"></label>
              <input class="border-dark" type="text" name="autor" required="">
            </td>
          </tr>
          <tr>
            <td>editorial </td>
            <td><label for="editorial"></label>
              <input class="border-dark" type="text" name="editorial" required="">
            </td>
          </tr>
          <tr>
            <td>edición: </td>
            <td><label for="edicion"></label>
              <input class="border-dark" type="text" name="edicion" required="">
            </td>
          </tr>
          <tr>
            <td>año: </td>
            <td><label for="fecha"></label>
              <input class="border-dark" type="text" name="fecha" required="">
            </td>
          </tr>
          <tr>
            <td>no. paginas: </td>
            <td><label for="paginas"></label>
              <input class="border-dark" type="number" name="paginas" required="">
            </td>
          </tr>
          <td>temas: </td>
          <td><label for="tema"></label>
            <input class="border-dark" type="text" name="tema" required="">
          </td>
          </tr>
          <tr>
            <td><input class="btn btn-dark" type="submit" name="registrar" id="registrar" value="GUARDAR"></td>
          </tr>
        </table>
      </form>
      <hr>
      <!-- fin  formulario de contacto -->
    </div>
  </div>
</div>
<!-- FIN DEL CONTENIDO PRINCIPAL -->

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