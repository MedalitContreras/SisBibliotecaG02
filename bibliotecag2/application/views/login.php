<div class="container">
<h2 align="center" class="display-4"><P><u>LOGIN</u></P></h2> 
<form method="post" action="<?php echo base_url('Login/evaluar')?>" class="form-group">
       
        <div class="form-group">
            <label>USUARIO</label>
            <input type="text" class="form-control" name="usuario">
        </div>
           
        <div class="form-group">
           <label>CONTRASEÑA</label>
            <input type="password"  class="form-control" name="password">
         </div>

        <div class="form-group">
        <input class="btn btn-primary" type="submit" value="ingresar">
        <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-primary" >Volver</a> 
        </div>
            
        
</form>
</div>