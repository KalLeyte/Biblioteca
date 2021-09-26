<!-- inicio nombre -->
<?php $nombrePagina = 'Contacto'; ?>
<!-- fin nombre -->

<!-- inicio header -->
<?php
include 'includes/header.php';
?>
<!-- fin header -->

<!-- inicio barra de navegacion -->
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
      <h1>contactanos</h1>
      <p>cualquier duda o sugerencia se podra comunicar al correo o numeros proporcionados</p>
    </div>
  </div>
</div>
<!-- fin header -->

<!-- inicio contenido -->
<br>
<div class="container unico">
  <center>
    <h2>correo</h2>
    <p> biblioteca.cbta35@gmail.com</p>
  </center>
  <div class="titul text">
    <hr>
    <h2>desarrollado por</h2>
    <nav class="navbar navbar-expand-md footernav">
      <ul class="navbar nav">
        <li class="nav-item"><a class="nav-link">Kal Leyte</a></li>
        <li class="nav-item"><a class="nav-link">Imanol Herrera</a></li>
        <li class="nav-item"><a class="nav-link">Itzel Torres</a></li>
      </ul>
      <h2>Contacto del desarrollador</h2>
      <nav class="navbar navbar-expand-md footernav">
        <ul class="navbar nav">
          <li class="nav-item"><a class="nav-link">aklg.itics.2001@gmail.com</a></li>
          <li class="nav-item"><a class="nav-link">https://github.com/KalLeyte</a></li>
          </li>
        </ul>

        <hr>
        <h2>telefonos de la escuela</h2>
        <ul class="navbar nav">
          <li class="nav-item"><a class="nav-link">(55) 13-14-19-21</a></li>
          <li class="nav-item"><a class="nav-link">(55) 13-14-01-00</a></li>
        </ul>
        <hr>
        <h2>dirección</h2>
        <ul class="navbar nav">
          <li class="nav-item"><a class="nav-link">Km. 22.5 carretera federal Mèxico – Puebla, Estado de Mèxico s/n, Valle de Chalco Solidaridad C.P. 56560</a></li>
        </ul>
  </div>
</div>
<!-- fin contenido -->

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