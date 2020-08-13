<div class="container">
<h2 align="center" class="display-4" class="text-info"><p><u>CATEGORÍA</u></p></h2>     
<div class="modal-dialog text-center">        
<table class="table-bordered">
    <thead>
        <tr class="table-active">
        <th scope="col">ID</th>
        <th scope="col"> Nombre del libro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
            <td><?php echo $reg->cate_id; ?></td>
            <td><?php echo $reg->cate_nombre; ?></td>
            <td>               
                <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$reg->cate_id);?>">
                 <a class="btn btn-success" href="<?php echo base_url('usuario/edit_cate/'.$reg->cate_id) ?>"> Editar</a>
                 <button class="btn btn-danger" type="submit"> Eliminar</button>
                </form>
            </td>    
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>