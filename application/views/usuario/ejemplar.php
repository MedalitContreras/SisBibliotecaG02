<div class="container">
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a  href="<?php echo base_url('usuario/regresar') ?>" class="navbar-brand" href="#"><i class="fas fa-home"></i> INICIO</a> 

  <a  href="<?php echo base_url('usuario/formulario') ?>" class="navbar-brand" href="#"><i class="fas fa-book"></i> INGRESAR NUEVO LIBRO</a> 

  <a  href="<?php echo base_url('usuario/ejemplar') ?>"  class="navbar-brand" href="#"><i class="fas fa-book-open"></i> EJEMPLARES </a>

  <a  href="<?php echo base_url('usuario/categoria') ?>"  class="navbar-brand" href="#"><i class="fas fa-book-open"></i> CATEGORIA </a> 

  <a href="<?php echo base_url('Login'); ?>" class="navbar-brand" href="#"><i class="fas fa-user-check"></i> INGRESAR</a>

  <a href="<?php echo base_url('Login/registro'); ?>" class="navbar-brand" href="#"><i class="fas fa-user-plus"></i> REGISTRARSE</a>

  <a href="<?php echo base_url('Login/salir'); ?>" class="navbar-brand" href="#"><i class="fas fa-sign-out-alt"></i> SALIR</a>

</nav> 
<h2 align="center" class="display-4"><P class="text-info">EJEMPLARES</P></h2>  
<br>

  

<table class="table-bordered">
    <thead>
        <tr class="table-active">
        <th scope="col">ID</th>
            <th scope="col"> Titulo</th>
            <th scope="col"> Editorial</th>
            <th scope="col"> Paginas</th>
            <th scope="col"> isbn</th>
            <th scope="col"> Idioma</th>
            <th scope="col"> Portada</th>
            <th  scope="col"> Digital</th>
            <th  scope="col"> Audio</th>
            <th  scope="col"> Resumen</th>
            <th  scope="col"> Tipo</th>
            <th  scope="col"> Categoria</th>
            <th  scope="col"> Valoracion</th>
            <th  scope="col"> Año</th>
            <th  scope="col"> Préstamos</th>
            <th scope="col" >Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
            <td><?php echo $reg->ejem_id; ?></td>
            <td><?php echo $reg->ejem_titulo; ?></td>
            <td><?php echo $reg->ejem_editorial; ?></td>
            <td><?php echo $reg->ejem_paginas; ?></td>
            <td><?php echo $reg->ejem_isbn; ?></td>
            <td><?php echo $reg->ejem_idioma; ?></td>
            <td><?php echo $reg->ejem_portada; ?></td>
            <td><?php echo $reg->ejem_digital; ?></td>
            <td><?php echo $reg->ejem_audio; ?></td>
            <td><?php echo $reg->ejem_resumen; ?></td>
            <td><?php echo $reg->ejem_tipo_id; ?></td>
            <td><?php echo $reg->ejem_cate_id; ?></td>
            <td><?php echo $reg->ejem_valoracion; ?></td>
            <td><?php echo $reg->ejem_anio; ?></td>
            <td><?php echo $reg->ejem_nprestamos; ?></td> 
            <td><a class="btn btn-success" href="<?php echo base_url('usuario/edit');?>/<?php echo $reg->ejem_id;?>">Editar ... 
            <a class="btn btn-danger" href="<?php echo base_url('usuario/eliminar');?>/<?php echo $reg->ejem_id;?>">Eliminar</td>
                
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>  