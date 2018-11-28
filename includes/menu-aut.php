<header class="header">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">
      <img src="dist/img/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
      <span class="navbar-toggler-icon pt-2">&#9776;</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if ($pagina=='index') {echo 'active';} ?>">
          <a class="nav-link" href="index-aut.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rock
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item <?php if ($pagina=='rock') {echo 'active';} ?>" href="rock-aut.php">História</a>
            <a class="dropdown-item <?php if ($pagina=='rock-inst') {echo 'active';} ?>" href="rock-inst-aut.php">Instrumentos</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Samba
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item <?php if ($pagina=='samba') {echo 'active';} ?>" href="samba-aut.php">História</a>
            <a class="dropdown-item <?php if ($pagina=='samba-inst') {echo 'active';} ?>" href="samba-inst-aut.php">Instrumentos</a>
          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pagode
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item <?php if ($pagina=='pagode') {echo 'active';} ?>" href="pagode-aut.php">História</a>
            <a class="dropdown-item <?php if ($pagina=='pagode-inst') {echo 'active';} ?>" href="pagode-inst-aut.php">Instrumentos</a>
          </div>
        </li>
        <li class="nav-item <?php if ($pagina=='quemsomos') {echo 'active';} ?>">
          <a class="nav-link" href="quemsomos-aut.php">Quem somos?</a>
        </li>
        <li class="nav-item <?php if ($pagina=='contato') {echo 'active';} ?>">
          <a class="nav-link" href="contato.php">Fale Conosco</a>
        </li>
      </ul>
    </div>
  </nav>
</header>