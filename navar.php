<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" id="logo" href="./"><img src="./imagenes/Dropstore.png" title="Logo" alt="Logo" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <form class="form-inline my-2 my-lg-0" id="busqueda">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pedido</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cuenta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            if(isset($_SESSION['Usuario'])){
          ?>
          <a class="dropdown-item" href="">Configurar cuenta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./cerrar.php">Cerrar sesión</a>
          <?php
            }
            else{
          ?>
          <a class="dropdown-item" href="./login2.php">Iniciar sesión</a>
          <a class="dropdown-item" href="./registro.php">Crear una cuenta</a>
          <?php
            }
          ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./carritodecompras.php">Carrito</a>
      </li>
    </ul>
  </div>
</nav>
<br>