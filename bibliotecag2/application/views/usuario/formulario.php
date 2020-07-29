<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</html>

<div  class="container">

<h2 align="center" class="display-4"><p><u>FORMULARIO</u></p></h2>
<form action="<?php echo base_url('usuario/guardar') ?>" method="post"  class="form-group">

            <div class="form-group" > 
             <label><h4>Título</h4></label>
                <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese el Título">
            <div  class="form-group">
                <label><h4>Editorial</h4></label>
                <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese la Editorial">
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
                <input type="text" class="form-control" name="ejem_Idioma" placeholder="Ingrese el Idioma">
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
               <input type="text" class="form-control" name="ejem_valoriacion" placeholder="Ingrese la Valoración">
             
                </div>
                    <label><h4>Año</h4></label>
                    <input type="number" class="form-control" name="ejem_anio" placeholder="Ingrese el Año">
                </div>
            <div class="container">
        <button type="submit" class="btn btn-primary">Guardar</button>        
 </div>
 </form>
 </div> 