<h2>Categoria </h2>                
<table>
    <thead>
        <tr>
        <th>ID</th>
        <th> Nombre del libro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($registros as $reg): ?>
        <tr>
        <td><?php echo $reg->id; ?></td>
            <td><?php echo $reg->nombres; ?></td>
            <td>               
                <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$reg->id);?>">
                 <a  href="<?php echo base_url('usuario/edit/'.$reg->id) ?>"> Editar</a>
                 <button type="submit"> Eliminar</button>
                </form>
            </td>    
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>