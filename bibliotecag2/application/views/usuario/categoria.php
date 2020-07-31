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
            <td><?php echo $reg->cate_id; ?></td>
            <td><?php echo $reg->cate_nombre; ?></td>
            <td>               
                <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$reg->cate_id);?>">
                 <a  href="<?php echo base_url('usuario/edit/'.$reg->cate_id) ?>"> Editar</a>
                 <button type="submit"> Eliminar</button>
                </form>
            </td>    
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>