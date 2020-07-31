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

<h2 align="center" class="display-4"><p><u>INGRESE UN NUEVO LIBRO</u></p></h2>
<form method="post"  action="<?php echo base_url('Usuario/guardar') ?>"  class="form-group">
<div class="modal-dialog text-center">
            <div class="form-group" > 
             <label><h4><i class="fas fa-bookmark"></i> Título:</h4></label>
                <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese el Título">
            </div>

            <div  class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Editorial:</h4></label>
                <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese la Editorial">
            </div>

            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Paginas:</h4></label>
                <input type="number" class="form-control" name="ejem_paginas" placeholder="Ingrese el número de páginas">
            </div>

            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Isbn:</h4></label>
                <input type="text" class="form-control" name="ejem_isbn" placeholder="Ingrese Isbn">
            </div>
       
            <div class="form-group"> 
                <label><h4><i class="fas fa-bookmark"></i> Idioma:</h4></label>
                <input type="text" class="form-control" name="ejem_idioma" placeholder="Ingrese el Idioma">
            </div>

            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Portada:</h4></label>
                <input type="text" class="form-control" name="ejem_portada" placeholder="Ingrese la Portada">
            </div>
        
        
            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Resumen:</h4></label>
                <input type="text" class="form-control" name="ejem_resumen" placeholder="Ingrese el Resumen">
            </div>
        
            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Tipo:</h4></label>
                <input type="text" class="form-control"  name="ejem_tipo_id" placeholder="Ingrese el Tipo">
            </div>
        
            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Categoria:</h4></label>
               <input type="text" class="form-control"  name="ejem_cate_id" placeholder="Ingrese la Categoría">
            </div>

            <div class="form-group">
                <label><h4><i class="fas fa-bookmark"></i> Valoracion:</h4></label>
               <input type="text" class="form-control" name="ejem_valoracion" placeholder="Ingrese la Valoración">
            </div>

            <div class="form-group">
                    <label><h4><i class="fas fa-bookmark"></i> Año:</h4></label>
                    <input type="number" class="form-control" name="ejem_anio" placeholder="Ingrese el Año">
            </div>

            <div class="form-group">
                    <label><h4><i class="fas fa-bookmark"></i> Prestamos:</h4></label>
                    <input type="number" class="form-control" name="ejem_nprestamos" placeholder="Ingrese numero de prestamos">
            </div>

                <br><br>
            <div class="container">
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Guardar</button>  
            <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" ><i class="fas fa-times"></i> Cancelar</a> 
       
 </div>
 </div>
 </form>
 </div> 