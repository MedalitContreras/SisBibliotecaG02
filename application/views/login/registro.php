<div class="container">
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a  href="<?php echo base_url('usuario/regresar') ?>" class="navbar-brand" href="#"><i class="fas fa-home"></i> INICIO</a> 

  <a  href="<?php echo base_url('usuario/formulario') ?>" class="navbar-brand" href="#"><i class="fas fa-book"></i> INGRESAR NUEVO LIBRO</a> 

  <a  href="<?php echo base_url('usuario/ejemplar') ?>"  class="navbar-brand" href="#"><i class="fas fa-book-open"></i> EJEMPLARES </a>

  <a href="<?php echo base_url('Login'); ?>" class="navbar-brand" href="#"><i class="fas fa-user-check"></i> INGRESAR</a>

  <a href="<?php echo base_url('Login/registro'); ?>" class="navbar-brand" href="#"><i class="fas fa-user-plus"></i> REGISTRARSE</a>

  <a href="<?php echo base_url('Login/salir'); ?>" class="navbar-brand" href="#"><i class="fas fa-sign-out-alt"></i> SALIR</a>

</nav> 
<title>REGISTRARSE</title>
<div  class="container">
<h2 align="center" class="display-4"><p><u>INGRESE SUS DATOS</u></p></h2>
<form action="<?php echo base_url('Login/guardar'); ?>" method="post">
<div class="form-group" > 
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Nombre de Usuario: </h4></label>
                <input type="text" class="form-control" name="usua_login" >
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Contraseña: </h4></label>
                <input type="password" class="form-control" name="usua_password">
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Codigo: </h4></label>
                <input type="number" class="form-control" name="usua_codigo" >
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Nombres: </h4></label>
                <input type="text" class="form-control" name="usua_nombres" >
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Apellidos:</h4></label>
                <input type="text" class="form-control" name="usua_apellidos" >
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Direccion: </h4></label>
                <input type="text" class="form-control" name="usua_direccion" >
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> E-mail: </h4></label>
                <input type="email" class="form-control" name="usua_email" >
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Telefono: </h4></label>
                <input type="number" class="form-control" name="usua_telefono" >
            </div>
            <div class="form-group">
                <td colspan="2"><input type="submit"  class="btn btn-primary" value="Ingresar"></td>
                <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" ><i class="fas fa-user-times"></i> Cancelar</a> 
            </div>

</div>
</div>
</form>