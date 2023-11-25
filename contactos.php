<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syle.css">
    <title>CONTACTANOS DMPM</title>
</head>
<body>

    <div class="register-container">
    <form class="form_signin" action="formulario.php" method="post">
        <?php
            if(isset($_GET['success'])){?>

            <p class="class"><?php echo $_GET['success']?></p>

           <?php }?>
           <br>
           <?php if(isset($_GET['errors'])){?>

<p class="class"><?php echo $_GET['errors']?></p>

<?php }?>

            <label for="username">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="telefono">numero telefonico:</label>
            <input type="telefono" id="numero" name="numero" required>

            <label for="mensaje">mensaje:</label>
            <input type="mensaje" id="mensaje" name="mensaje" required>
            
            <a href="index.php">ENVIAR</a>
           
        </form>
    </div>

</body>
</html>