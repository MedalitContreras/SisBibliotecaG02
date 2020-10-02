<div class=container>
<h2 align="center" class="display-6" class="text-info"><p class="list-group-item list-group-item-warning">CATEGORÍA</p></h2>     
       
<table  class="table table-striped">
    <thead class="thead-dark">
        <tr class="table-active">
        <th scope="col"><div class="text-center">ID</div></th>
        <th scope="col"><div class="text-center">Nombre del libro</div></th>
        <th scope="col"><div class="text-center">Resumen</div></th>
        <th scope="col"><div class="text-center">Categoria</div></th> 
        <th scope="col"><div class="text-center">Opciones</div></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
        <th><div class="modal-dialog text-center"><?php echo $reg->ejem_id; ?></div></th>
        <th><div class="modal-dialog text-center"><?php echo $reg->ejem_titulo; ?></div></th>
        <th><div class="modal-dialog text-center"><?php echo $reg->ejem_resumen; ?></div></th>
        <th><div class="modal-dialog text-center"><?php echo $reg->cate_nombre; ?></div></th>
            <td class=" text-center">             
                <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$reg->cate_id);?>">
                 <a class="btn btn-success btn-xs" href="<?php echo base_url('usuario/edit_cate/'.$reg->cate_id) ?>"><i class="far fa-edit"></i>Editar  </a>
                 <button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-trash-alt"></i>Eliminar </button>
                </form>
                
            </td>    
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>