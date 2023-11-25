<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro DMPM</title>
</head>
<body>

    <div class="register-container">
    <form class="form_signin" action="guardar.php" method="post">
        <?php
            if(isset($_GET['success'])){?>

            <p class="class"><?php echo $_GET['success']?></p>

           <?php }?>
           <br>
           <?php if(isset($_GET['errors'])){?>

<p class="class"><?php echo $_GET['errors']?></p>

<?php }?>

            <label for="username">Usuario:</label>
            <input type="text" id="usuario" name="Usuario" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <label for="confirm-password">Confirmar contraseña:</label>
            <input type="password" id="contra" name="contra" required>
            
            <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit" onclick="verificar()">Registrar</button>
            <a href="ingresar.php">Iniciar Sesion</a>
           
        </form>
    </div>

</body>
</html>