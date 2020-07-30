<div  class="container">

<h2 align="center" class="display-4"><p><u>FORMULARIO</u></p></h2>
<form method="post"  action="<?php echo base_url('Usuario/guardar') ?>"  class="form-group">

            <div class="form-group col-md-8 col-md-offset-2" > 
             <label><h4>Título</h4></label>
             <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_titulo" placeholder="Ingrese el Título">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Editorial</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese la Editorial">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Paginas</h4></label>
                <div class="col-md-9">
                <input type="number" class="form-control" name="ejem_paginas" placeholder="Ingrese el número de páginas">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Isbn</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_isbn" placeholder="Ingrese Isbn">
                </div>
            </div>
       
            <div class="form-group col-md-8 col-md-offset-2"> 
                <label><h4>Idioma</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_idioma" placeholder="Ingrese el Idioma">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Portada</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_portada" placeholder="Ingrese la Portada">
                </div>
                </div>
        
            <div class="form-group col-md-8 col-md-offset-2">
                    <label><h4>Digital</h4></label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" name="ejem_digital" placeholder="">
                    </div>
            </div>
        
            <div class="form-group col-md-8 col-md-offset-2" >
                <label><h4>Audio</h4></label>
                <div class="col-md-9">
                <input type="text"  class="form-control" name="ejem_audio" placeholder="">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Resumen</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_resumen" placeholder="Ingrese el Resumen">
                </div>
            </div>
            
            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Tipo</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="ejem_tipo_id" placeholder="Ingrese el Tipo">
                </div>
            </div>
            
            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Categoria</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="ejem_cate_id" placeholder="Ingrese la Categoría">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Valoracion</h4></label>
                <div class="col-md-9">
                <input type="text" class="form-control" name="ejem_valoracion" placeholder="Ingrese la Valoración">
                </div>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Año</h4></label>
                <div class="col-md-9">
                <input type="number" class="form-control" name="ejem_anio" placeholder="Ingrese el Año">
                </div>
            </div>
            
            <div class="form-group col-md-8 col-md-offset-2">
                <label><h4>Prestamos</h4></label>
                <div class="col-md-9">
                <input type="number" class="form-control" name="ejem_nprestamos" placeholder="Ingrese numero de prestamos">
                </div>
            </div>

                <br><br>
            <div class="container">
        <button type="submit" class="btn btn-primary">Guardar</button>  
        <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
       
 </div>
 </form>
 </div> 