<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--AGREGAR FONTAWESOME-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap4/css/estilos.css">
    <script src="https://kit.fontawesome.com/09c1c30a14.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap4/js/bootstrap.min.js"></script>
    <style type="text/css">
    body {background-color: #ECECEC}
    </style>  
<div class="container">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">B-G2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('usuario/regresar') ?>" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('usuario/formulario') ?>" href="#">Ingresar Libro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('usuario/ejemplar') ?>" href="#">Ejemplar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('usuario/categoria') ?>" href="#">Categoria</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url('Login'); ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ingresar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Login/registro'); ?>" href="#">Registrarse</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url('Login/salir'); ?>" href="#">Salir</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar Libro" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>