<div class="container">
 
<form method="post" action="<?php echo base_url('Login/evaluar')?>" class="form-group">
       
       <title>LOGIN</title>
       <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
        <div class="modal-content">
        <div class="col-12 user-img"> 
        <img src="imagenes/img.png"width="100" height="100">
        </div>
        <form class="col-12">
            <div class="form-group" id="user-group">
            <input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario">
            </div>
            <div class="form-group" id="user-group">
            <input type="password" class="form-control" placeholder="Contraseña" name="password">
            </div>
            <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Ingresar">
            <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
            </div>
        </form>
        </div>
        </div>
        </div>
       </div> 
</form>
</div>




