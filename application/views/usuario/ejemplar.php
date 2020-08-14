<div class="container">

<h2 align="center" class="display-4"><P ><u>EJEMPLARES</u></P></h2>  
<br>

  
<div class="table-responsive">
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
            <th  scope="col"> Resumen</th>
            <th  scope="col"> Tipo</th>
            <th  scope="col"> Categoria</th>
            <th  scope="col"> Valoracion</th>
            <th  scope="col"> Año</th>
            <th  scope="col"> Préstamos</th>
            <th  scope="col"> Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_titulo; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_editorial; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_paginas; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_isbn; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_idioma; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_portada; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_digital; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_resumen; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_tipo_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_cate_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_valoracion; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_anio; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_nprestamos; ?></div></th> 
            <td><div class="modal-dialog text-center">  <a class="btn btn-success btn-xs" href="<?php echo base_url('usuario/edit');?>/<?php echo $reg->ejem_id;?>"><i class="far fa-edit"></i>Editar</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('usuario/eliminar');?>/<?php echo $reg->ejem_id;?>"><i class="fas fa-trash-alt"></i>Eliminar</div></td>
                
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>  
</div>