<?php $nombrePagina = 'Actualizacion de Datos'; ?>
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
      <h1>area de Actualizacion de Datos</h1>
    </div>
  </div>
</div>
<div class="text">
  <p>ingrese los nuevos datos del libro</p>
  <p>en caso de no conocer el "ID", se puede obtener en el area de "busqueda de libros por"</p>
</div>
<!-- CONTENIDO PRINCIPAL -->
<div class="container mt-5 mb-5 table-hover table-dark border border-primary contact">
  <div class="row">
    <div class="col-md-12 text-center ver">
      <!-- formulario de contacto -->
      <form action="dbactualizar.php" method="post">
        <table border="0" align="center">
          <tr>
            <hr>
            <td>id: </td>
            <td><label for="id"></label>
              <input class="border-dark" type="text" name="id" required="">
            </td>
          </tr>
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
            <input class="border-dark" type="number" name="clasificacion" required="">
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
            <td><input class="btn btn-dark" type="submit" name="registrar" id="registrar" onclick="pregunta()" value="actualizar"></td>
          </tr>
        </table>
      </form>
      <hr>
      <!-- fin  formulario de contacto -->
    </div>
  </div>
</div>
<!-- FIN DEL CONTENIDO PRINCIPAL -->

<!-- fin header -->

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