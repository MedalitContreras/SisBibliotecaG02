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
<nav class="navbar navbar-light" style="background-color: #F3964F;">
  <a  href="<?php echo base_url('usuario/regresar') ?>" class="navbar-brand" href="#"><i class="fas fa-home"></i> INICIO</a> 

  <a  href="<?php echo base_url('usuario/formulario') ?>" class="navbar-brand" href="#"><i class="fas fa-book"></i> INGRESAR NUEVO LIBRO</a> 

  <a  href="<?php echo base_url('usuario/ejemplar') ?>"  class="navbar-brand" href="#"><i class="fas fa-book-open"></i> EJEMPLARES </a>

  <a  href="<?php echo base_url('usuario/categoria') ?>"  class="navbar-brand" href="#"><i class="fas fa-book-open"></i> CATEGORIA </a> 

  <a href="<?php echo base_url('Login'); ?>" class="navbar-brand" href="#"><i class="fas fa-user-check"></i> INGRESAR</a>

  <a href="<?php echo base_url('Login/registro'); ?>" class="navbar-brand" href="#"><i class="fas fa-user-plus"></i> REGISTRARSE</a>

  <a href="<?php echo base_url('Login/salir'); ?>" class="navbar-brand" href="#"><i class="fas fa-sign-out-alt"></i> SALIR</a>

</nav> 