<div class="container">
<br><br>
<h2 align="center" class="display-4"><P><u>EJEMPLARES</u></P></h2>  
<br><br> 
<a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-primary">Regresar Perfil</a>  

<table class='table table-bordered'>
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
            <td><?php echo $reg->ejem_cate_id; ?></td>
            <td><?php echo $reg->ejem_valoracion; ?></td>
            <td><?php echo $reg->ejem_anio; ?></td>
            <td><?php echo $reg->ejem_nprestamos; ?></td> 
               
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>  
