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
<div class="container">
<h2 align="center" class="display-4"><p><u>EDITAR</u></p></h2>

<form method="post"  action="<?php echo base_url('usuario/update') ?>">

            <div class="form-group" > 
             <label><h4>Título</h4></label>
                <input type="text" class="form-control" name="ejem_titulo"  placeholder="Ingrese el Título"  >
            <div  class="form-group">
                <label><h4>Editorial</h4></label>
                <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese la Editorial" >
            </div>

            <div class="form-group">
                <label><h4>Paginas</h4></label>
                <input type="number" class="form-control" name="ejem_paginas" placeholder="Ingrese el número de páginas">
            </div>

            <div class="form-group">
                <label><h4>Isbn</h4></label>
                <input type="text" class="form-control" name="ejem_isbn" placeholder="Ingrese Isbn">
            </div>
       
            <div class="form-group"> 
                <label><h4>Idioma</h4></label>
                <input type="text" class="form-control" name="ejem_idioma" placeholder="Ingrese el Idioma">
            </div>

            <div class="form-group">
                <label><h4>Portada</h4></label>
                <input type="text" class="form-control" name="ejem_portada" placeholder="Ingrese la Portada">
                </div>
        
        <div class="form-group">
                <label><h4>Digital</h4></label>
                <input type="text" class="form-control" name="ejem_digital" placeholder="">
                </div>
       
        <div class="form-group" >
           <label><h4>Audio</h4></label>
            <input type="text"  class="form-control" name="ejem_audio" placeholder="">
                </div>
            <div class="form-group">
                <label><h4>Resumen</h4></label>
                <input type="text" class="form-control" name="ejem_resumen" placeholder="Ingrese el Resumen">
            </div>
        
          <div class="form-group">
                <label><h4>Tipo</h4></label>
                <input type="text" class="form-control"  name="ejem_tipo_id" placeholder="Ingrese el Tipo">
          
            </div>
        
            <div class="form-group">
                <label><h4>Categoria</h4></label>
               <input type="text" class="form-control"  name="ejem_cate_id" placeholder="Ingrese la Categoría">
            </div>
          <div class="form-group">
                <label><h4>Valoracion</h4></label>
               <input type="text" class="form-control" name="ejem_valoracion" placeholder="Ingrese la Valoración">
             
                </div>
                    <label><h4>Año</h4></label>
                    <input type="number" class="form-control" name="ejem_anio" placeholder="Ingrese el Año">
                </div>
               <div>
                    <label><h4>Prestamos</h4></label>
                    <input type="number" class="form-control" name="ejem_nprestamos" placeholder="Ingrese numero de prestamos">
                </div>
                <br><br>
            <div class="container">
        <button type="submit" class="btn btn-primary">Guardar</button>  
        <a  href="<?php echo base_url('usuario/ejemplar') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
       
 </div>
 </form>