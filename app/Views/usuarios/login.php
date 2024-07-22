<div class="container mt-5 mb-5 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center">
      <h2>Iniciar sesion</h2>
    </div>
    <!--mensaje de error-->
    <?php if(session()->getFlashdata('msg')):?>
      <div class="alert alert-warning">
        <?= session()->getFlashdata('msg')?>
      </div>
<?php endif;?>

<!--Inicio del formulario de login-->
<form method="post" action="<?php echo base_url('/enviarlogin') ?>">
  <div class="card-body" media="(max-width:768px)">
    <div class="mb-2">
      <label for="email" class="form-label">Correo</label>
      <input name="email" type="femail" class="form-control" placeholder="Correo">
    </div>

    <div class="mb-3">
       <label for="email" class="form-label">Contraseña</label>
       <input name="pass" type="password" class="form-control" placeholder="Ingrese Contraseña">
    </div>

      <input type="submit" value="Ingresar" class="btn btn-sucess">
      <a href="<?php echo base_url('/login'); ?>" class="btn btn-danger">Cancelar</a>
      <br><span>¿Aún no se registro?<a href="<?php echo base_url('/registro'); ?>">Registrarse aqui</a></span>
  </div>
  <style> 
        body {
           background-color: #e3f2ed;
           color: #333;
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 0;
    
           text-align:center ;
           font-weight:bold;
           font-style: italic;
              }

     </style>

</form>
</div>

</div>