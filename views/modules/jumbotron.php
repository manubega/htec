<div class="jumbotron">
          <h1 class="display-3" id="jumbotron">¡Proyectos a tu medida!</h1>
          <p class="lead">La razón para que tu Empresa crezca</p>
          <hr class="m-y-2">
          <p>¿Deseas conocer más? ¡Suscríbete a nuestra lista de correo!</p>
          <p></p>

          <!--FORMULARIO PARA DAR DE ALTA EL CORREO DEL USUARIO -->
         <form class="form-inline" method="POST" enctype="multipart/form-data" onsubmit="return validarEmail()">
              <div class="form-group">
                <label class="sr-only" for="direccionEmail">Dirección de email</label>
                <div class="input-group">
                  <div class="input-group-addon">@</div>
                  <input type="email" class="form-control" name = "correo" id="email" placeholder="Tu email">
                  
                </div>
              </div>
                <button type="submit" class="btn btn-primary">Suscríbete</button>
        </form>
        <!-- FIN DEL FORMULARIO PARA DAR DE ALTA EL CORREO DEL USUARIO -->
    </div>

    <?php 

    $email = new EmailC();
    $email->emailController();
     ?>

