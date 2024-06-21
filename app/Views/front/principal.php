<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="assets/CSS/styles.css">
    <style> 
        p {
             color: green;   
        }
    </style> <!--Inserto un estilo interno -->
    <link rel="STYLESHEET" href="miestilo.css">
     
  
  
  </head>
   
  <header>
    <h1>Bienvenido a nuestra pagina principal</h1>
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
   <script src="assets/js/bootstrap.bundle.min.js"></script>
    
        <img src="assets/img/imagentalentos.jpg" alt="talentosdigitales"> 
        <h1><b> INFORMATIDIGITAL </b></h1>
        <p>"Primero el cliente <strong> siempre"</strong></p>
        
   <div class = "content">
    <section>
      
    <p class="parrafo">  <!-- Incorporo un párrafo-->
        Somos una empresa de tecnología que se dedica a la venta de insumos, accesorios, articulos de tecnología avanzada y además
        solucionar problemas digitales e informáticos en la ciudad de Corrientes Capital.
    </p>
    <p> Nuestros servicios se adaptan a todo tipo de clientes y necesidades tecnológicas, solo debe consultar y nosotros lo asesoraremos inmediatamente.
    </p>
    </section>
   </div>
   </header>
   <body>
  <!--navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('principal')?>"></a>
      <!--logo/marca de la empresa-->
      <img src="assets/img/logo.png" alt="marca" width="75" height="30" class="img_fluid">
     </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  
  <!--carrusel-->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/imagen1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/imagen2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/imagen3.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
      <!--fin del carrusel-->
 </div>

  
    
     
    


<section>
        <h2>Bienvenido!!! Aquí encontrás todos nuestros tipos de servicios y gran variedad de artículos informáticos. </h2>
        <img src="assets/img/imagen.jpg" alt="mi imagen">
</section>
    <section>
 <nav>                                          <!--barra de navegacion-->
    <ul>
       
         <li> <a href="https://google.com"> google.com </a></li>
         <li> <a href="https://espanol.yahoo.com/">espanol.yahoo.com</a></li>
         <li> <a href="https://talentosdigitales.ar/">talentosdigitales </a></li>
        
    </ul> 
 </nav>



</section>
   
<footer>
                                           
      
  <style>
    nav ul li {
    display: block; /* Para eliminar el espacio adicional que algunos navegadores agregan a las img. */
    margin: 0 auto; /* Centrar las imágenes horizontalmente */
    display: inline-block;
    margin-right: 20px;
   }
  </style>
  <nav>
    <ul>
           
             <li> <a href="http://www.facebook.com/" target="_blank" > <img src="assets/img/face.png" alt="facebook"> </a> </li>
             <li> <a href="https://www.instagram.com/" target="_blank"> <img src="assets/img/instagram.png" alt="instagram"> </a></li>
             <li> <a href="https://www.twitter.com/" target="_blank"> <img src="assets/img/twitter.png" alt="twitter"> </a></li>
            
   </ul> 
 </nav>



    
    <p>Derechos de autor &copy; 2024. Todos los derechos reservados.|INFORMATIDIGITAL</p>
</footer>
</body>
</html>







