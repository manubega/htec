<div class="jumbotron">
          <h1 class="display-3" id="jumbotron">¡Proyectos a tu medida!</h1>
          <p class="lead">La razón para que tu Empresa crezca</p>
          <hr class="m-y-2">
          <label for = "emailRegistro"><p>¿Deseas conocer más? ¡Suscríbete a nuestra lista de correo!</p></label>
          <p></p>

          <!--FORMULARIO PARA DAR DE ALTA EL CORREO DEL USUARIO -->
         <form class="form-inline" method="POST" enctype="multipart/form-data" onsubmit="validarEmail()">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">@</div>
                  <input type="email" class="form-control" name = "correo" id="emailRegistro" placeholder="Tu email" maxlength="25" minlength="6">
                </div>
              </div>
                <button type="submit" class="btn btn-primary">Suscríbete</button>
                <br>
        </form>
        <!-- FIN DEL FORMULARIO PARA DAR DE ALTA EL CORREO DEL USUARIO -->
    </div>

    <?php 

    $email = new EmailC();
    $email->emailController();
     ?>

