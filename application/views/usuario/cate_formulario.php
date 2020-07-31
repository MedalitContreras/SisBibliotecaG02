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
<div  class="container">

<h2 align="center" class="display-4"><p><u>INGRESE UNA CATEGORIA</u></p></h2>
<form method="post"  action="<?php echo base_url('usuario/update_cate/'.$categoria->cate_id); ?>"  class="form-group">

            <div class="form-group" > 
             <label><h4>Categoria</h4></label>
                <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese Categoria" value="<?php echo $categoria->cate_nombre; ?>">
            </div>
           
                <br><br>
            <div class="container">
        <button type="submit" class="btn btn-primary">Guardar</button>  
        <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
       
 </div>
 </form>
 </div> 