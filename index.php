<?php $nombrePagina = 'Acceso'; ?>

<!-- header -->
<?php
include 'includes/header.php';
?>
<!-- fin header -->

<body class="acceso-img">

  <div class="acceso">
    <h1>acceso</h1>
  </div>

  <div class="container mt-5 mb-5 table-hover table-dark border border-primary contact">
    <div class="row">
      <div class="col-md-12 text-center ver">

        <form action="login.php" method="post" align="right">
          <tr>
            <hr>
          <tr>
            <hr>
            <td>usuario: </td>
            <td>
              <input class="border-dark" type="text" name="USUARIO" required="">
            </td>
          </tr>&nbsp;&nbsp;
          <td>Contraseña: </td>
          <td>
            <input class="border-dark" type="password" name="CONTRASENA" required="">
          </td>
          </tr>
          <tr>&nbsp;&nbsp;
          <tr>
            <td colspan="2"> <input class="btn btn-dark" type="submit" name="enviando" value="entrar"></td>
          </tr>
          </table>

        </form>
        <hr>
      </div>
    </div>
  </div>



  <!-- archivos js -->
  <?php
  include 'includes/scripts.php';
  ?>
  <!-- fin archivos js -->
</body>

</html>