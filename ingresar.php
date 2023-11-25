
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Login</title>
</head>
<body>

    <div class="login-container">
        <form action="login.php" method="post">
        <?php
            if(isset($_GET['success'])){?>

            <p class="class"><?php echo $_GET['success']?></p>

           <?php }?>
           <br>
           <?php if(isset($_GET['errors'])){?>

<p class="class"><?php echo $_GET['errors']?></p>

<?php }?>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="Usuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="Contraseña" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>

</body>
</html>
