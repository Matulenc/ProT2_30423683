<!--navegacion-->
<?php
$session = session();
$nombre=$session->get('nombre');
$perfil=$session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-green">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
      <!--logo/marca de la empresa-->
      <img src="<?php echo base_url('assets/img/logo.png')?>" alt="marca" width="75" height="30" class="img_fluid"/>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


<?php if(session()->perfil_id == 1): ?>
  <div class="btn btn-secondary active btnUser btn-sm">
  <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
  </div>
  <!-- <a class="navbar-brand" href="#"></a> -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     <li class="nav-item">
     
<a class="nav-link" href='registro'>Registro</a></li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='login'>Login</a></li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
</li> 
</ul>
</div>
<?php elseif(session()->perfil_id == 2): ?>   
    <div class="btn btn-info active btnUser btn-sm">
      <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
      </div>
      <!-- NAVBAR PARA CLIENTES que pueden comprar-->

      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="quienes_somos">Quienes somos</a></li>
        </li>
      <!--  <li class="nav-item">
       <a class="nav-link" href='catalogo'>Catalogo</a></li>
        </li> -->
        <li class="nav-item">
       <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
      </li>
      </ul> 
      </div>
      <?php else:?>
        <!-- NABVAR PARA CLIENTES no logueados -->
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <li class="nav-item">
        <a class="nav-link" href="quienes_somos">Quienes somos</a></li>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="acerca_de">Acerca_de</a>
        </li>
        <!--  <li class="nav-item">
       <a class="nav-link" href='catalogo'>Catalogo</a></li>
        </li> -->
      <li class="nav-item">
       <a class="nav-link" href='registro'>Registro</a></li>
      </li>
      <li class="nav-item">
      <a class="nav-link" href='login'>Login</a></li>
      </li>
      </ul>
      </div>
  <form class="d-flex" role="buscar">
    <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
    <button class="btn btn-outline-sucess" type="submit">Buscar</button>
  </form>
  <?php endif;?>
  </div>
  </div>

  </nav><!-- Fin de barra de navegacion 



        <a class="nav-link active" aria-current="page" href="principal">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca_de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Productos</a></li>
            <li><a class="dropdown-item" href="#">Servicios</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Otros</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      -->
      









