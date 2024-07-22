<!-- <div class="container mt-0 mb-0">
<div class="card-header text-justify">
  <div class="row d-flex justify-content-center">
    <div class="card collg-3" style="width: 50%;">
      <h3>Registro</h3> -->

     <?php $validation = \Config\Services::validation(); ?>
     <form method="post" action="<?php echo base_url('/enviar-form')?>">
      <?= csrf_field();?>
      <?php if (!empty(session()->getFlashdata('fail'))):?>
      <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
      <?php endif?>
      <?php if (!empty (session()->getFlashdata('sucess'))):?>
        <div class="alert alert-danger"><?=session()->getFlashdata('sucess');?>
        <?php endif?>
        
<div class ="card-body justify-content-center" media=(max-width:768px)>
    <div class="form">
      <label for="nombre" class="form-label">Nombre</label>
      <input name="nombre" type="text" class="form-control" placeholder="nombre">
      <!--Error-->
      <?php if($validation->getError('nombre')){?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('nombre'); ?>
        </div>
        <?php  }?>
  </div>
<div class="mb-3">
  <label for="apellido" class="form-label">Apellido</label>
  <input type="text" name="apellido" class="form-control" placeholder="apellido">
  <!--Error-->
  <?php if($validation->getError('apellido')){?>
  <div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('apellido'); ?>
  </div>
  <?php }?>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
<input type="femail" name="email" class="form-control" placeholder="correo@algo.com">
<?php if($validation->getError('email')){?>
  <div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('email'); ?>
  </div>
  <?php }?>
</div>
<div class="mb-3">
  <label for="usuario" class="form-label">Usuario</label>
  <input type="text" name="usuario" class="form-control" placeholder="usuario">
  <!--Error-->
  <?php if($validation->getError('usuario')){?>
  <div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('usuario'); ?>
  </div>
  <?php }?>
</div>
<div class="mb-3">
  <label for="pass" class="form-label">Contraseña</label>
  <input type="password" name="pass" class="form-control" placeholder="password">
  <!--Error-->
  <?php if($validation->getError('pass')){?>
  <div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('pass'); ?>
  </div>
  <?php }?>
</div>
<input type="submit" value="Guardar" class="btn btn-sucess">
<input type="reset" value="Cancelar" class="btn btn-danger">
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
</div>

























<!-- <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="nombre" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="apellido" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>

  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Send</button>
  </div>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="assets/CSS/styles.css">
    </form><style> 
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

     </style> -->
