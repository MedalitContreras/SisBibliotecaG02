<div class="container">
<h2 align="center" class="display-4"><p><u>Editar</u></p></h2>

<form method="post"  action="<?php echo base_url('usuario/update') ?>" class="needs-validation" novalidate>

            <div class="form-group" > 
             <label><h4>Título</h4></label>
                <input type="text" class="form-control" name="ejem_titulo"  placeholder="Ingrese el Título" required >
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div  class="form-group">
                <label><h4>Editorial</h4></label>
                <input type="text" class="form-control" name="ejem_editorial" placeholder="Ingrese la Editorial"required >
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div class="form-group">
                <label><h4>Paginas</h4></label>
                <input type="number" class="form-control" name="ejem_paginas" placeholder="Ingrese el número de páginas" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div class="form-group">
                <label><h4>Isbn</h4></label>
                <input type="text" class="form-control" name="ejem_isbn" placeholder="Ingrese Isbn" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
       
            <div class="form-group"> 
                <label><h4>Idioma</h4></label>
                <input type="text" class="form-control" name="ejem_idioma" placeholder="Ingrese el Idioma" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div class="form-group">
                <label><h4>Portada</h4></label>
                <input type="text" class="form-control" name="ejem_portada" placeholder="Ingrese la Portada" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
        
            <div class="form-group">
                <label><h4>Digital</h4></label>
                <input type="text" class="form-control" name="ejem_digital" placeholder="" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
       
            <div class="form-group" >
                <label><h4>Audio</h4></label>
                <input type="text"  class="form-control" name="ejem_audio" placeholder="" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div class="form-group">
                <label><h4>Resumen</h4></label>
                <input type="text" class="form-control" name="ejem_resumen" placeholder="Ingrese el Resumen" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
        
            <div class="form-group">
                <label><h4>Tipo</h4></label>
                <input type="text" class="form-control"  name="ejem_tipo_id" placeholder="Ingrese el Tipo" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
        
            <div class="form-group">
                <label><h4>Categoria</h4></label>
                <input type="text" class="form-control"  name="ejem_cate_id" placeholder="Ingrese la Categoría" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div class="form-group">
                <label><h4>Valoracion</h4></label>
                <input type="text" class="form-control" name="ejem_valoracion" placeholder="Ingrese la Valoración" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div>
                <label><h4>Año</h4></label>
                <input type="number" class="form-control" name="ejem_anio" placeholder="Ingrese el Año" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div>
                <label><h4>Prestamos</h4></label>
                <input type="number" class="form-control" name="ejem_nprestamos" placeholder="Ingrese numero de prestamos" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

                <br><br>
            <div class="container">
        <button type="submit" class="btn btn-primary">Guardar</button>  
        <a  href="<?php echo base_url('usuario/ejemplar') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
       
 </div>
 </form>

 <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>