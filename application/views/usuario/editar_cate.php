<div class="container">
<h2 align="center" class="display-4"><p><u>EDITAR</u></p></h2>

<form method="post"  action="<?php echo base_url('usuario/update_cate') ?>">

            <div class="form-group" > 
             <label><h4>Categoria</h4></label>
                <input type="text" class="form-control" name="ejem_titulo" >
            </div>

                <br><br>
            <div class="container">
        <button type="submit" class="btn btn-primary">Guardar</button>  
        <a  href="<?php echo base_url('usuario/categoria') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
       
 </div>
 </form>