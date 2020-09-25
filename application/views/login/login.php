<div class="container">
 
<form method="post" action="<?php echo base_url('Login/evaluar')?>" class="form-group" class="needs-validation" novalidate>
       
       <title>LOGIN</title>
       <div class="modal-dialog text-center">
            
                <div class="modal-content">
                    <div class="col-12 user-img"> 
                    <img src="imagenes/img.png"width="150" height="150">
                    </div>
                        <form class="col-12 needs-validation" novalidate>

                            <div class="form-group" id="user-group">
                            <label><h4><i class="fas fa-user"></i> Usuario: </h4></label>
                            <input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario" required>
                            <div class="valid-feedback"> campo completado :) </div>
                            <div class="invalid-feedback"> campo no completado :( </div>
                            </div>

                            <div class="form-group" id="user-group">
                            <label><h4><i class="fas fa-key"></i> Contraseña:</h4></label>
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                            <div class="valid-feedback"> campo completado :) </div>
                            <div class="invalid-feedback"> campo no completado :( </div>        
                            </div>

                            <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Ingresar">
                            <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" >Cancelar</a> 
                            </div>
                        </form>
                    </div>
                </div>
            
       </div> 
</form>
</div>
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

