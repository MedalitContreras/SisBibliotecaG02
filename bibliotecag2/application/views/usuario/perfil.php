<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</html>

<h2 align="center" class="display-4">Perfil de Usuario</h2>
<div class="container">
    <a  href="<?php echo base_url('usuario/formulario') ?>"  type="button" class="btn btn-info">Ingresar Nuevo Libro</a>
<br></br>
<h2 >Ejemplares  </h2>                
<table class=" table">
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
              
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>  