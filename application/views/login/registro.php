<div class="container">
<title>REGISTRARSE</title>
<div  class="container">
<h2 align="center" class="display-4"><p><u>INGRESE SUS DATOS</u></p></h2>
<form action="<?php echo base_url('Login/guardar'); ?>" method="post" class="needs-validation" novalidate>
<div class="form-group " > 
            <div class="form-group">
                <label ><h4><i class="fas fa-user-edit"></i> Nombre de Usuario: </h4></label>
                <input type="text" class="form-control" name="usua_login" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>

            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Contraseña: </h4></label>
                <input type="password" class="form-control" name="usua_password" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Codigo: </h4></label>
                <input type="number" class="form-control" name="usua_codigo" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Nombres: </h4></label>
                <input type="text" class="form-control" name="usua_nombres" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Apellidos:</h4></label>
                <input type="text" class="form-control" name="usua_apellidos" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Direccion: </h4></label>
                <input type="text" class="form-control" name="usua_direccion" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> E-mail: </h4></label>
                <input type="email" class="form-control" name="usua_email" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <label><h4><i class="fas fa-user-edit"></i> Telefono: </h4></label>
                <input type="number" class="form-control" name="usua_telefono" required>
                <div class="valid-feedback"> campo completado :) </div>
                <div class="invalid-feedback"> campo no completado :( </div>
            </div>
            <div class="form-group">
                <td colspan="2"><input type="submit"  class="btn btn-primary" value="Ingresar"></td>
                <a  href="<?php echo base_url('usuario/regresar') ?>" type="submit" class="btn btn-danger" ><i class="fas fa-user-times"></i> Cancelar</a> 
            </div>

</div>
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