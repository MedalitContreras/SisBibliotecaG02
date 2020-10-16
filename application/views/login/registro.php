
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<title>Registrarse</title>
<div></div>
<h2 align="center" class="display-6"><p class="alert alert-secondary">Ingrese datos</p></h2>
<form action="<?php echo base_url('Login/guardar'); ?>" method="post" class="needs-validation" novalidate>
<div>
<div class="form-row">
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-3">
                <label ><h5><i class="fas fa-user-edit"></i> Nombre de Usuario: </h4></label>
                <input type="text" class="form-control" name="usua_login" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>

            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> Contraseña: </h4></label>
                <input type="password" class="form-control" name="usua_password" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
            </div>
</div>
<div class="form-row">
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> Nombres: </h4></label>
                <input type="text" class="form-control" name="usua_nombres" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> Apellidos:</h4></label>
                <input type="text" class="form-control" name="usua_apellidos" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
            </div>
</div>
<div class="form-row">
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> Codigo: </h4></label>
                <input type="number" class="form-control" name="usua_codigo" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> Direccion: </h4></label>
                <input type="text" class="form-control" name="usua_direccion" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
            </div>
</div>
<div class="form-row">
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> E-mail: </h4></label>
                <input type="email" class="form-control" name="usua_email" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
                <label><h5><i class="fas fa-user-edit"></i> Telefono: </h4></label>
                <input type="number" class="form-control" name="usua_telefono" required>
                <div class="valid-feedback"> Campo completado</div>
                <div class="invalid-feedback"> Campo no completado</div>
            </div>
            <div class="form-group col-md-3">
            </div>
</div>
<div class="form-row">
<div class="form-group col-md-5">
            </div>
            <div class="form-group">
                <td colspan="2"><input type="submit"  class="btn btn-outline-dark" value="Ingresar"></td>
                <a  href="<?php echo base_url('login') ?>" type="submit" class="btn btn-outline-danger" ><i class="fas fa-user-times"></i> Cancelar</a> 
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