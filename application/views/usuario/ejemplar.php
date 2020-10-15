<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
</head>
<body >
<h2 class="text-center" class="display-6"><P class="list-group-item list-group-item-warning">EJEMPLARES</P></h2>  
<br>
<div  class="table-responsive">
<table id="ejemp" class="table">
    <thead>
        <tr class="table-active">
            <th scope="col">ID</th>
            <th scope="col"><div class="text-center"> Titulo</div></th>
            <th scope="col"><div class=" text-center"> Editorial</div></th>
            <th scope="col"><div class=" text-center"> Paginas</div></th>
            <th scope="col"><div class=" text-center"> Idioma</div></th>
            <th  scope="col"><div class=" text-center"> Digital</div></th>
            <th  scope="col"><div class=" text-center"> Cate</div></th>
            <th  scope="col"><div class= "text-center"> Val</div></th>
            <th  scope="col"><div class=" text-center"> Año</div></th>
            <th  scope="col"><div class=" text-center"> Préstamos</div></th>
            <th  scope="col"><div class=" text-center"> Opciones</div></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_titulo; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_editorial; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_paginas; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_idioma; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_digital; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_cate_id; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_valoracion; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_anio; ?></div></th>
            <th><div class="modal-dialog text-center"><?php echo $reg->ejem_nprestamos; ?></div></th> 
            
            <td class=" text-center"><a class="btn btn-success btn-xs" href="<?php echo base_url('usuario/edit');?>/<?php echo $reg->ejem_id;?>"><i class="far fa-edit"></i>Editar</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('usuario/eliminar');?>/<?php echo $reg->ejem_id;?>"><i class="fas fa-trash-alt"></i>Eliminar</td>
                
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<br>
<a class="btn btn-primary" href="<?php echo base_url('reportes') ?>"><i class="far fa-edit"></i>Imprimir</a>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#ejemp').DataTable();
} );
</script>
</body>

</html>
