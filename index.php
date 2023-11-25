<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DETALLES DMPM</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon">
                       <a href="#"><i class="fa fa-facebook"></i></a>
                       <a href="#"><i class="fa fa-twitter"></i></a>
                       <a href="#"><i class="fa fa-linkedin"></i></a>
                       <a href="#"><i class="fa fa-wifi"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="a-right">

                   <?php 
if(empty($_SESSION['Id'])){
?>
<a href="ingresar.php"><p><span><i class="fa fa-user"></i></span>Login</p></a>
<a href="registro.php"><p><span><i class="fa fa-pencil"></i></span>Registro</p></a>
<?php
}else{

}
?>
                        <form action="login.php" method="post">
                        </form>
                        
                   </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="#"><h2>D. DMPM</h2></a>
                   </div>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php">BIENVENIDOS</a></li>
                      <li><a href="productos.php">TIENDA</a></li>
                      <li><a href="contactanos.php">CONTACTANOS</a></li>
                    </ul>
                </div>
                <div class="cart">
    <p onclick="viewCart()"><i class="fa fa-cart-arrow-down"></i><sup id="cart-count">0</sup> <span id="cart-total">$0.00</span></p>
</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <div class="header-part">
                    <p>HOME &nbsp;&nbsp;&nbsp;<span><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;ABOUT US</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="slider">
    <img src="img/ancheta1.jpg" alt="Slider">
    <h3>Sobre nosotros </h3>
</section>
<section class="our_skill">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">
                    <h2>¿Quienes somos?</h2>
                    <p>Descubre nuestra selección exclusiva de exquisitas anchetas para regalar en cualquier ocasión. Desde delicados sets gastronómicos hasta cestas personalizadas, nuestra variedad de 
                        productos  y presentaciones elegantes harán de cada regalo una experiencia inolvidable. Encuentra la combinación perfecta de sabores y productos selectos para sorprender a tus seres queridos o clientes. 
                        Explora nuestras anchetas cuidadosamente elaboradas y haz de cada regalo un gesto inigualable de aprecio y distinción</p>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="progress_bar">
                  <h2>Nuestras habilidades</h2>
                  <p>Elegancia</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
                  </div>
                  <p>Creatividad</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                  </div>
                  <p>Carisma</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                  </div>
                  <p>Servicios</p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:55%"></div>
                  </div>
                  </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Conoce más</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
               <div class="text-img left">
                   <img src="img/mision.jpg">
                <h3>Nuestra Misión</h3>
                <p>Nuestra misión es deleitar a nuestros clientes ofreciendo anchetas de dulces exquisitas y personalizadas que transmitan alegría y sorpresa. 
                    Nos comprometemos a brindar productos de alta calidad, creatividad en el diseño y un servicio excepcional, buscando siempre superar las expectativas de quienes confían en nosotros para regalar momentos memorables.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="text-img center">
                   <img src="img/vision.jpg">
                <h3>Nuestra Visión</h3>
                <p>Nos visualizamos como líderes en la creación de experiencias dulces únicas y memorables. 
                    Buscamos expandir nuestra presencia a nivel nacional e internacional, manteniendo la excelencia en la calidad de nuestros productos y la satisfacción del cliente. Aspiramos a ser reconocidos como el referente en la industria de regalos dulces, innovando continuamente y creando lazos emocionales a través de nuestras creaciones.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="text-img right">
                   <img src="img/lograremos.jpg">
                <h3>Queremos lograr</h3>
                <p>En nuestro sitio web de ventas de anchetas, aspiramos a ofrecerte mucho más que simplemente productos: deseamos brindarte la magia de regalar momentos inolvidables. Buscamos crear una experiencia única al seleccionar y personalizar las anchetas de dulces ideales para cada ocasión
                     ¡Te invitamos a explorar, sorprenderte y regalar felicidad en cada caja que enviamos!</p>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="team">
   <div class="clear"></div>
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2>Nuestro grupo</h2>
           </div>
       </div>
        <div class="row">
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema1.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Daniela Moreno</h3>
                <p>Asesora</p>
            </div>
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema2.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Michael Williams</h3>
                <p>Contador</p>
            </div>
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema3.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Luna Palacios</h3>
                <p>Decoradora</p>
            </div>
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema4.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Pablo Salas</h3>
                <p>Asesor</p>
            </div>
        </div>
        <h2>Términos de Uso del Sitio Web [Detalles DMPM]</h2>
           </div>
       </div>
        <div class="row">
               <div class="teams">
                <p>Fecha de vigencia: [25/11/2023]
                <ol>
  <li> 1. Aceptación de los Términos de Uso</li>
   Al acceder y utilizar este sitio web, usted acepta cumplir y estar sujeto a estos Términos de Uso. Si no está de acuerdo con alguna parte de estos términos, por favor, absténgase de utilizar nuestro sitio.
  <li>2. Uso Autorizado</li>
  Usted acepta utilizar este sitio únicamente con fines legales y de acuerdo con estos Términos de Uso. Se le prohíbe el uso no autorizado o ilegal de este sitio, incluyendo, pero no limitándose a, la violación de leyes de derechos de autor y marcas registradas.
  <li>3. Privacidad</li>
  Su uso de este sitio está sujeto a nuestra Política de Privacidad, que se encuentra </p>
  <li>4. Enlaces a Terceros</li>
  Este sitio puede contener enlaces a sitios web de terceros. Detalles DMPM no asume responsabilidad por el contenido, la privacidad o las prácticas de seguridad de sitios web de terceros.
  <li>5. Modificaciones</li>
  Nos reservamos el derecho de modificar estos Términos de Uso en cualquier momento. Es su responsabilidad revisar periódicamente los cambios. El uso continuado de este sitio después de la publicación de cambios constituirá su aceptación de dichos cambios.
  <li>6.Limitación de Responsabilidad</li>
Detalles DMPM no será responsable por daños directos, indirectos, incidentales, consecuentes o especiales resultantes del uso o la incapacidad de usar este sitio web.
</ol>

           

   

   

   

   




</p>
    </div>
</section>
<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>SOMOS:</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Seguro</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Confiable</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Rapido</p></a>
                </div>
                <div class="col-md-4 center">
                    <h2>INFORMACIÓN</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Pedidos facil y rapido</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Te asesoramos en lo mejor </p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Enamora a tus seres queridos</p></a>
                </div>
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>CONTACTO</h2>
                        <a href="#"><p><i class="fa fa-map-marker" aria-hidden="true"></i>Cristo Rey</p></a>
                        <a href="#"><p><i class="fa fa-phone" aria-hidden="true"></i>3128156452</p></a>
                        <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i>detallesdmpm@gmail.com</p></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="footer_bottom">
       <div class="footer_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copy_txt">
                        <p>Realizado por <span>Dyhanneth Melissa</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
</body>
</html>