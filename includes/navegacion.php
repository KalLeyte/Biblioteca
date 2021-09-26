<!-- barra de navegacion -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top  table-hover table-dark border border-primary">
   <!-- animated wow bounceInDown (animacion para el menu :,v)-->
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
      <img src="favico.ico" width="30" height="30" class="d-inline-block align-top" alt=""> &nbsp;&nbsp;&nbsp; <a class="navbar-brand" href="inicio.php">BIBLIOTECA</a>
      <hr>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
         <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link navbar-blue" href="inicio.php">INICIO</a></li>
            <li class="nav-item"><a class="nav-link navbar-blue" href="insertar.php">insertar datos</a></li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle navbar-blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">busqueda de libros por:</a>
               <div class="dropdown-menu navbar-blue" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item navbar-blue" href="area.php">area</a>
                  <a class="dropdown-item navbar-blue" href="tema.php">tema</a>
                  <a class="dropdown-item navbar-blue" href="materia.php">materia</a>
                  <a class="dropdown-item navbar-blue" href="nombre.php">nombre</a>
                  <a class="dropdown-item navbar-blue" href="autor.php">autor</a>
                  <a class="dropdown-item navbar-blue" href="editorial.php">editorial</a>
                  <a class="dropdown-item navbar-blue" href="edicion.php">edición</a>
                  <a class="dropdown-item navbar-blue" href="año.php">año</a>
               </div>
            </li>
            <li class="nav-item"><a class="nav-link navbar-blue" href="actualizar.php">actualizar</a></li>
            <li class="nav-item"><a class="nav-link navbar-blue" href="eliminar.php">eliminar</a></li>
            <li class="nav-item"><a class="nav-link navbar-blue" href="contacto.php">contacto</a></li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle navbar-blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">usuario</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item navbar-blue" href="cerrar.php">cerrar sesion</a>
               </div>
            </li>
         </ul>
      </div>
   </div>
</nav>