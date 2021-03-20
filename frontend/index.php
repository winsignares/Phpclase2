
<?php
  require_once('Componentes/head.php');
?>

    
<main class="form-signin">
  <form action="../backend/ingreso.php" method ="GET">
    <img class="mb-4" src="img/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">
      Por favor ingrese
    </h1>
    <label for="cajaEmail" class="visually-hidden">
        Ingrese el Correo electronico
    </label>
    <input type="email" id="cajaEmail" name="cajaEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
    <label for="cajaContraseña" class="visually-hidden">
        Contraseña
    </label>
    <input type="password" id="cajaContraseña" name="cajaContraseña" class="form-control" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> 
        Recordarme
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">
        Ingresar
    </button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


  
<?php
    require_once('Componentes/foot.php');
?>
