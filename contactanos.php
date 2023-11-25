<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactanos</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
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
                        <a href="registro.php"><p><span><i class="fa fa-user"></i></span>Login</p></a>
                        <a href="registro.php"><p><span><i class="fa fa-pencil"></i></span>Register</p></a>
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
                <div class="col-md-2">
                    <div class="cart">
                        <p><i class="fa fa-cart-arrow-down"></i><sup>0</sup> &#36;&nbsp;&nbsp;0.00</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <div class="header-part">
                    <p>HOME &nbsp;&nbsp;&nbsp;<span><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;CONTACT US</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28747.851497593252!2d89.24895624999999!3d25.754656999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1484143225401" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact">
                   <h2>Datos de contacto</h2>
                    <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>3128156452</p>
                           <p>6723910</p>
                       </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                   </div>
                   <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>detalles.dmpm@gmail.com</p>
                       </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>detallesdmpm_store</p>
                       </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="get_in_touch">
                   <h2>Pongase en contacto con nosotros</h2>
                    <form action="#" method="post">
                        <p>Nombre (obligatorio)</p>
                        <input type="text" name="">
                        <p>Correo (obligatorio)</p>
                        <input type="text" name="">
                        <p>Numero telefonico</p>
                        <input type="text" name="">
                        <p>Dejanos un mensaje</p>
                        <textarea rows="10" cols="50"></textarea>
                        <input type="submit" value="ENVIAR">
                    </form>
                </div>
            </div>
        </div>
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