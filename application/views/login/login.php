<div class="container">
 
<form method="post" action="<?php echo base_url('Login/evaluar')?>" class="form-group" class="needs-validation" novalidate>
       
<body>
    <div id="login">
        <h3 class="text-center text-black pt-5"> Bienvenido a B-G2</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Ingresar</h3>
                            <div class="form-group">
                                <label for="username" class="text-black"><i class="fas fa-user"></i> Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-black"><i class="fas fa-lock"></i> Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-black"><span>Recordar</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-outline-dark" value="Ingresar">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo base_url('Login/registro'); ?>" class="text-info"><i class="fas fa-user-plus"></i> Registrese aqui </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
 
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

