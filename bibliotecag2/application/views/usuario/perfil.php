<h2>Perfil de Usuario</h2>
<a  href="<?php echo base_url('usuario/formulario') ?>"> Ingresar Nuevo Libro</a>
<h2 >Ejemplares </h2>                
<table class="table table-bordered">
    <thead>
        <tr>
        <th>ID</th>
            <th> Titulo</th>
            <th> Editorial</th>
            <th> Paginas</th>
            <th> isbn</th>
            <th> Idioma</th>
            <th> Portada</th>
            <th> Digital</th>
            <th> Audio</th>
            <th> Resumen</th>
            <th> Tipo</th>
            <th> Categoria</th>
            <th> Valoracion</th>
            <th> Anio</th>
            <th> Numero de Prestamos</th>
           
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